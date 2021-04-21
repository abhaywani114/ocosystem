<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrdVoucher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('prd_voucher', function (Blueprint $table) {
            $table->bigIncrements('id');

			// Support 3 types of voucher: Cash (deduct fixed amount),
			// Qty (deduct product qty
			// Percent (deduct a discount percentage of product price)
            $table->enum('type',['cash','qty','pct'])->default('qty');
			// Fixed amount of cash voucher value in cents
            $table->integer('cash_val')->unsigned();
			// Percentage discount value (e.g. 12.5%) to be applied to product price
            $table->float('pct_val')->unsigned();

            $table->integer('product_id')->unsigned();
            $table->integer('subcategory_id')->unsigned()->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('package_qty')->unsigned()->nullable();
            $table->integer('qty_unit')->unsigned()->nullable();
            $table->date('expiry')->nullable();

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
        //
         Schema::dropIfExists('prd_voucher');
    }
}
