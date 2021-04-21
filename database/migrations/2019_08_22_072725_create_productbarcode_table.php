<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductbarcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Barcodes are unique for a merchant_id. However the same barcode
		   are allow to occur in other merchant_id */
        Schema::create('productbarcode', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// FK to merchantproduct.id
			$table->integer('merchantproduct_id')->unsigned();
			$table->string('name')->nullable();
			$table->string('barcode')->nullable();
			$table->string('barcode_type')->default('C128');;
			$table->string('sku')->nullable();
			$table->date('expirydate')->nullable();
			$table->date('startdate')->nullable();
			$table->integer('quantity')->nullable();
			$table->text('notes')->nullable();
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
        Schema::dropIfExists('productbarcode');
    }
}
