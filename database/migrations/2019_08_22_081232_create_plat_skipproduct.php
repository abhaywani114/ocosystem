<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatSkipproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_skipproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            // FK to opos_openbill.id
            $table->integer('skip_id')->unsigned();
            // FK to product.id
            $table->integer('product_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->integer('order_price')->unsigned();

            // This is a flag to differentiate unconfirmed orders in Order
            // View and confirmed orders in OpenBill
            $table->boolean('unconfirmed')->default(false);

            // This is to support Promotional bundle
            // FK to opos_promo.id
            $table->integer('promo_id')->unsigned()->nullable();

            // This is store discount percentage seleted for the product
            $table->integer('discount')->unsigned()->nullable();

            $table->enum('status',array(
                'active','printed','voided','completed','paid'))->default('active');

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
        Schema::dropIfExists('plat_skipproduct');
    }
}
