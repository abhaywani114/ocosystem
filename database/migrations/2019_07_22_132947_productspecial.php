<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productspecial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Link table to store maximum have many specials a product can
		 * have */
		Schema::create('productspecial', function (Blueprint $table) {
			$table->bigIncrements('id');
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// FK to prd_special.id
			$table->integer('special_id')->unsigned();
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
        Schema::dropIfExists('productspecial');
    }
}
