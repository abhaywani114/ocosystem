<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposPromoproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_promoproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_promo.id
			$table->integer('promo_id')->unsigned();
			// FK to product.id
            $table->integer('product_id')->unsigned();

			// Proo product discount in percentage:
			// Applied to products in a promo
            $table->float('discount')->unsigned();
			// Promo product quantity
            $table->integer('quantity')->unsigned();
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
        Schema::dropIfExists('opos_promoproduct');
    }
}
