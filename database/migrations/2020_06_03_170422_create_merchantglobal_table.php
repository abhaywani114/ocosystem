<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantglobalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchantglobal', function (Blueprint $table) {
            $table->bigIncrements('id');

			/* This setting is for this particular merchant.id */
			$table->integer('merchant_id')->unsigned();

			/* This stores the filename. The full path is:
			 * public/images/merchantglobal/<merchant_id> */
			$table->string('company_logo_image')->nullable();

			/* Sales Order */
			$table->boolean('so_has_logo')->default(false);
			$table->text('so_footer')->nullable();

			/* Purchase Order */
			$table->boolean('po_has_logo')->default(false);
			$table->text('po_footer')->nullable();

			/* Invoice */
			$table->boolean('inv_has_logo')->default(false);
			$table->text('inv_footer')->nullable();

			/* Delivery Order */
			$table->boolean('do_has_logo')->default(false);
                $table->text('do_footer')->nullable();

			/* Debit Note */
			$table->boolean('dn_has_logo')->default(false);
			$table->text('dn_footer')->nullable();

			/* Credit Note */
			$table->boolean('cn_has_logo')->default(false);
			$table->text('cn_footer')->nullable();

			/* Consignment note */
			$table->boolean('consign_has_logo')->default(false);
			$table->text('consign_footer')->nullable();

			/* Quotation */
			$table->boolean('quo_has_logo')->default(false);
			$table->text('quo_footer')->nullable();

			/* ARPayment Receipt */
			$table->boolean('rcp_has_logo')->default(false);
			$table->text('rcp_footer')->nullable();

            $table->softDeletes();
            $table->timestamps();
            $table->engine="ARIA";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchantglobal');
    }
}
