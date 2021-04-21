<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantcreditlimitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchantcreditlimit', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to merchant.id, this is a dealer
			$table->integer('dealer_merchant_id')->unsigned();
			// FK to merchant.id, this is a supplier
			$table->integer('supplier_merchant_id')->unsigned();
			// This is the credit limit which the supplier gives to this dealer
			$table->integer('credit_limit')->unsigned();
			// This is the available credit limit balance
			$table->integer('avail_credit_limit')->unsigned();
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
        Schema::dropIfExists('merchantcreditlimit');
    }
}
