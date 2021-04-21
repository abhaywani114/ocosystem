<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductbmatrixbarcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table relates a product to its bmatrix barcodes */
        Schema::create('productbmatrixbarcode', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// Stores the bmatrix barcodes for this product
			$table->string('bmatrixbarcode');
			// Stores the bmatrix barcodes in JSON for this product
			$table->string('bmatrixbarcodejson');
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
        Schema::dropIfExists('productbmatrixbarcode');
    }
}
