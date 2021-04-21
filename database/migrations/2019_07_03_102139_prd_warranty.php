<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrdWarranty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void

     */
    public function up()
    {
        //
        Schema::create('prd_warranty', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('product_id')->unsigned();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('coverage_id')->unsigned()->nullable();

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
         Schema::dropIfExists('prd_warranty');
    }
}
