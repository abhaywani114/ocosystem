<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductbarcodelocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productbarcodelocation', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to productbarcode.id
			$table->integer('productbarcode_id')->unsigned();
			// FK to location.id
			$table->integer('location_id')->unsigned();
			// FK to rack.id
			$table->integer('rack_id')->unsigned();
			// FK to merchant.id; relate product to franchisee
			$table->integer('franchisee_merchant_id')->unsigned()->nullable();
			$table->integer('quantity');
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
        Schema::dropIfExists('productbarcodelocation');
    }
}
