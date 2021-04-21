<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locationproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to location.id
            $table->integer('location_id')->unsigned();
			// FK to product.id
            $table->integer('product_id')->unsigned();
			// FK to merchant.id; Need to track Franchisee's products
            $table->integer('franchisee_merchant_id')->unsigned()->nullable();
			// Need to make sure we support negative.
			// Float is for fuel products.
            $table->float('quantity');
			// Need to keep track of damaged quantity
            $table->integer('damaged_quantity');
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
        Schema::dropIfExists('locationproduct');
    }
}
