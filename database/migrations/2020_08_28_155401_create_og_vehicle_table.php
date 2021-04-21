<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');
			// FK to merchant.id, the owner of the vehicle
			$table->integer('merchant_id')->unsigned();
			$table->string('number_plate')->nullable();
			$table->enum('ownership',['own','external'])->default('own');
			// FK to users.id for deliveryman function
			$table->integer('deliveryman_user_id')->unsigned()->nullable();
			// These are the max capacity for the compartments.
			// In terms of liters
			$table->integer('c1_max')->unsigned()->nullable();
			$table->integer('c2_max')->unsigned()->nullable();
			$table->integer('c3_max')->unsigned()->nullable();
			$table->integer('c4_max')->unsigned()->nullable();
			$table->integer('c5_max')->unsigned()->nullable();
			$table->integer('c6_max')->unsigned()->nullable();
			$table->integer('c7_max')->unsigned()->nullable();
			$table->integer('c8_max')->unsigned()->nullable();
			/* Store current location via GPS */
			$table->string('longitude')->nullable();
			$table->string('latitude')->nullable();
			/* Store current fuel level from OBD device */
			$table->float('fuel_level')->nullable();
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
        Schema::dropIfExists('og_vehicle');
    }
}
