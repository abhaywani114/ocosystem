<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrdRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prd_restaurant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('subcategory_id')->unsigned()->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('cogs')->unsigned()->nullable();
            $table->integer('max')->unsigned()->nullable();
            $table->integer('loyalty')->unsigned()->nullable();

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
         Schema::dropIfExists('prd_restaurant');
    }
}
