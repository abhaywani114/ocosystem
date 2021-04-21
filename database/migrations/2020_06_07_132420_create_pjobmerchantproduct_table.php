<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobmerchantproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// This relates products to a contractor in a pjob. Products can be
		// rawmaterial (product.ptype=rawmaterial) or can be customization
		// (product.ptype=customization) or a manually entered service
		// (pjobproduct.id)
        Schema::create('pjobmerchantproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to pjobmerchant.id
			$table->integer('pjobmerchant_id')->unsigned();
			// FK to pjobproduct.id for services entered manually
			$table->integer('pjobproduct_id')->unsigned()->nullable();
			// FK to product.id
			// Note: product.id = prd_rawmaterial.product_id
			//       product.id = prd_customization.product_id
            $table->integer('product_id')->unsigned()->nullable();
            $table->boolean('active')->default(false);
			// This is to select a product for the pjob of a contractor
			// Products can be of rawmaterial and customization
			//$table->boolean('active')->default(false);
			$table->integer('qty')->unsigned();
			// Historical record of the product price at time of transaction,
			// regardless of the currentprice. Price is stored in DB as cents
			$table->integer('price')->unsigned();
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
        Schema::dropIfExists('pjobmerchantproduct');
    }
}
