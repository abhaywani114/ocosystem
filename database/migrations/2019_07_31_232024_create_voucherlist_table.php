<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores and tracks the invidual voucher, including
		 * the selling, buying and usage data */
        Schema::create('voucherlist', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to prd_voucher.id
            $table->integer('voucher_id')->unsigned();
			// This is voucher_id for the individual vouchers
            $table->string('systemid');
			// FK to opos_receipt.id
            $table->integer('receipt_id')->unsigned()->nullable();
			// Where this voucher was sold
			// FK to location.id
            $table->integer('location_id')->unsigned()->nullable();
			// Who sold this voucher (the cashier on the POS)
			// FK to users.id
            $table->integer('staff_user_id')->unsigned();
			// This is the buyer of the voucher (if he is in the system)
			// FK to users.id
            $table->integer('buyer_user_id')->unsigned()->nullable();
            $table->integer('qty_left');
			$table->enum('status',
				['pending','active','expired','fully_consumed']);

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
        Schema::dropIfExists('voucherlist');
    }
}
