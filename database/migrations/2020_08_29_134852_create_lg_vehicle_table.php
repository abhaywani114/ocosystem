<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLgVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lg_vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number_plate')->nullable();
            $table->enum('type',['MPV','Van','1-ton Lorry','3-ton Lorry','5-ton Lorry','10-ton Lorry','20ft Container Truck','40ft Container Truck'])->nullable();
			$table->integer('max_volumetric')->unsigned()->nullable();
			$table->enum('ownership',['owned','rented','leased'])->default('owned');
			// FK to users.id to store deliveryman
			$table->integer('deliveryman_user_id')->unsigned()->nullable();

			// Capabilities is stored in linktable: lg_vehiclecapability

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
        Schema::dropIfExists('lg_vehicle');
    }
}
