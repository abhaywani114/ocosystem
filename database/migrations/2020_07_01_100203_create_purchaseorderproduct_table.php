<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseorderproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseorderproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to purchaseorder.id
			$table->integer('purchaseorder_id')->unsigned();
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// This may be different from the retail/wholesale price
			$table->integer('purchase_price')->unsigned();
			$table->integer('quantity')->unsigned();
			// Archival storage for product
			$table->string('product_systemid');
			$table->string('product_name');
			$table->string('product_thumbnail');
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
        Schema::dropIfExists('purchaseorderproduct');
    }
}
