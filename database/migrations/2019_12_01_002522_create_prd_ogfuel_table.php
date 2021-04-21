<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrdOgfuelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prd_ogfuel', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
			$table->integer('product_id')->unsigned();
			$table->integer('litre')->unsigned()->nullable();
			$table->integer('price')->unsigned()->nullable();
			$table->integer('upper_price')->unsigned()->nullable();
			$table->integer('lower_price')->unsigned()->nullable();
			$table->integer('wholesale_price')->unsigned()->nullable();
			$table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('prd_ogfuel');
    }
}
