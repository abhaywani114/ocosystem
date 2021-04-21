<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $a = new SystemID('invoice') 
			$table->string('systemid');
			// FK to buyer's (dealer) merchant.id
			$table->integer('dealer_merchant_id')->unsigned();
			// FK to seller's (supplier) merchant.id
			$table->integer('supplier_merchant_id')->unsigned();
			// FK to deliveryorder.id
			$table->integer('deliveryorder_id')->unsigned();
			// FK to users.id for staff who created this invoice
			$table->integer('staff_user_id')->unsigned();

			// *** VOID attributes ***
			$table->boolean('is_void')->default(false);
			// FK to users.id, to store who had voided this SO
			$table->integer('void_user_id')->unsigned()->nullable();
			$table->text('void_reason')->nullable();

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
        Schema::dropIfExists('invoice');
    }
}
