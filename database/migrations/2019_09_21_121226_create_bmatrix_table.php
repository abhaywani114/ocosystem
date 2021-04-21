<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmatrixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	   	/* This table is the primary table to store the barcode matrix
		   of a product barcode, constains which subcategory it affects,
		   and color and custom attributes are in their
		   respective linktables */
        Schema::create('bmatrix', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to prd_subcategory.id
			// (can get prd_subcategory.category_id)
			$table->integer('subcategory_id')->unsigned();
			// FK to merchant.id
			$table->integer('merchant_id')->unsigned();
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
        Schema::dropIfExists('bmatrix');
    }
}
