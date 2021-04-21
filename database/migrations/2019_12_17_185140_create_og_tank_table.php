<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgTankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_tank', function (Blueprint $table) {
            $table->bigIncrements('id');
			// Directly corresponds to PTS2 "Tank"
            $table->integer('tank_no')->unsigned()->nullable();
			// 119000000000x
            $table->string('systemid');
			// FK to product.id
            $table->integer('product_id')->unsigned()->nullable();
			// FK to location.id
            $table->integer('location_id')->unsigned()->nullable();
			// FK to users.id to store the creator
            $table->integer('user_id')->unsigned()->nullable();
			// Max capacity of tank in liters
            $table->integer('max_capacity')->unsigned()->nullable();
			// Max height of tank in mm
            $table->integer('height')->unsigned()->nullable();
			// FK to merchant.id
            $table->integer('franchise_merchant_id')->unsigned()->nullable();
			$table->enum('type', ['direct','franchise'])->default('direct');
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
        Schema::dropIfExists('og_tank');
    }
}
