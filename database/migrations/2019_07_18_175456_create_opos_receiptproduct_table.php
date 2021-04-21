<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposReceiptproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_receiptproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_receipt.id
            $table->integer('receipt_id')->unsigned();
			// FK to product.id
            $table->integer('product_id')->unsigned();

            // This is to support Promotional bundle
			// FK to opos_promo.id
            $table->integer('promo_id')->unsigned()->nullable();

			/* This is a local copy of the product */
            $table->string('name'); // Name of product
            $table->float('quantity')->unsigned();
            $table->integer('price')->unsigned();
			$table->integer('discount_pct')->unsigned()->
				default(0)->nullable();
			$table->integer('discount')->unsigned()->
				default(0)->nullable();

            $table->enum('status',[
                "completed",
                "inprogress",
                "delivered",
                "returned",
                "outfordelivery",
                "cancelled",
                "pending",
                "refunded",
                "active",
                "voided"
            ])->default('active');

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
        Schema::dropIfExists('opos_receiptproduct');
    }
}
