<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorycostproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventorycostproduct', function (Blueprint $table) {
            $table->bigIncrements('id');

            // This is inventorycost.id, PK of inventorycost table
            $table->integer('inventorycost_id')->unsigned();

            // This is product.id, PK of product table
            $table->integer('product_id')->unsigned();
            $table->integer('quantity')->unsigned();

            // This is the per unit cost price of the product in cents 
            $table->integer('cost')->unsigned();

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
        Schema::dropIfExists('inventorycostproduct');
    }
}
