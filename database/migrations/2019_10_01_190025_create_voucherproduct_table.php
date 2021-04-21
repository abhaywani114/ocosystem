<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucherproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to voucher.id
			$table->integer('voucher_id')->unsigned();
			// FK to location.id
			$table->integer('location_id')->unsigned();
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// When voucher is deducting product qty
			$table->integer('vquantity');
			// When voucher represents a fixed amount of cash
			// e.g. $10 cash voucher
			$table->integer('vcash');
			// When voucher is deducting a percentage of the price
			// e.g. 15% discount voucher
			$table->integer('vpercent');
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
        Schema::dropIfExists('voucherproduct');
    }
}
