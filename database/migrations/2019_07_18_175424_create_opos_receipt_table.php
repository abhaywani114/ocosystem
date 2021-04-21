<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_receipt', function (Blueprint $table) {
            $table->bigIncrements('id');

			// Unique ID coming from a DB sequence, "receipt_seq"
			$table->string('systemid');

			// Cash received, typically more than amount, 
			// thereby, expect some change
            $table->integer('cash_received')->unsigned()->nullable();

			// Typically 10%
            $table->integer('servicecharge')->unsigned()->nullable();

             /* Service Tax is NOT Service Charge.
			 * This is stored as percent e.g. 6.5% */
            $table->float('service_tax')->default(0);

			/* Types of segment this transaction is coming from
			   cash -> direct OPOSsum segment
			   tdebtor -> credit sales from OPOSsum Petrol Station
			   franchise -> cash from Franchise segment
			   foodcourt -> cash from Foodcourt segment */
			$table->enum('segment',
				['cash','tdebtor','franchise','foodcourt'])->
				default('cash');

			// Types of payment we accept
            $table->enum('payment_type',
                ['cash','creditcard','point','wallet','mix'])->default('mix');

            // Different receipt templates 
            $table->enum('receipt_type', ['pump','serpae','neon'])->
				default('neon');

			// Local point accepted
            $table->enum('point',['opencredit','other'])->nullable();

			// External points in wallet which are accepted
            $table->integer('wallet')->unsigned()->nullable();

            $table->integer('terminal_id')->unsigned();

			// FK to users.id. The user_id of cashier
            $table->integer('staff_user_id')->unsigned();

			// Store the last 4 digits of the creditcard
            $table->integer('creditcard_no')->unsigned()->nullable();

			// FK to company.id. This to support receipt access via:
			// superadmin, direct, franchise, foodcourt and mall
			$table->integer('company_id')->unsigned();

            $table->enum('mode',['inclusive','exclusive'])->
				default('inclusive');

            $table->enum('status',[
                'active','confirmed','printed','voided','frozen',
                'completed','refunded'])->default('active');
            $table->string('remark');

			// FK to users.id
			// If customer is a registered user (twoway), we store their users.id here
            $table->integer('customer_user_id')->unsigned()->nullable();

			/* Store receipt addresss which was active at time of generation
			 * Can be either company or branch addresss */
            $table->string('receipt_address')->nullable();

			/* Store receipt currency which was active at time of generation */
            $table->string('currency')->nullable();

			/* Store receeipt logo which was active at time of generation.
			 * This is a localcopy and may not be the same as the current 
			 * receipt logo */
            $table->string('receipt_logo')->nullable();

			/* Stores rounded of value. Can be negative */
            $table->integer('round')->default(0);

			// Whether this receipt has been voided
            $table->timestamp('voided_at')->nullable()->default(null);

			// Need to store pax
            $table->integer('pax')->unsigned()->default(1);

			// FK to og_pump.pump_no and og_pump.pump_id
			$table->integer('pump_no')->unsigned()->default(null);
			$table->integer('pump_id')->unsigned()->default(null);

			// FK to og_pump.pump_id.
            $table->integer('pump_id')->unsigned()->default(null);

			// Transacted type
			$table->enum('transacted',['opt','pos','wallet'])->default('pos');

            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opos_receipt');
    }
}
