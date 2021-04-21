<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposLoyaltyptslogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_loyaltyptslog', function (Blueprint $table) {
            $table->bigIncrements('id');
			// Loyalty Points = [16] (e.g.1160000000005)
			$table->string('systemid');
			// FK to opos_receipt.id, to relate lpts to receipt
            $table->integer('receipt_id')->unsigned();
			// Staff who either sold or redeemed points for the member
			// FK to users.id
            $table->integer('staff_user_id')->unsigned();
			// Member either accumulating or consuming points
			// FK to opos_member.id
            $table->integer('member_id')->unsigned();
			// In=accumulating, Out=consuming
            //$table->enum('type',['in','out']);
			// The current balance of his points
            $table->integer('lpts')->default(0);
			// Merchant where his points are accumulated
			// FK to merchant.id
			$table->integer('source_merchant_id')->unsigned();
			// Merchant where his points are rewarded for a purchase
			// FK to merchant.id
			$table->integer('rewarded_merchant_id')->unsigned();
			// Merchant where his points have been redeemded for a product
			// FK to merchant.id
			$table->integer('redeemed_merchant_id')->unsigned();
			// The date which this batch of points expire
			$table->datetime('expiry')->nullable();
			$table->enum('status',['earned','expired','refunded','redeemed'])->
				default('earned');

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
        Schema::dropIfExists('opos_loyaltyptslog');
    }
}
