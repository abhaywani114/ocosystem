<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLgVehiclecapabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lg_vehiclecapability', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to lg_vehicle.id
			$table->integer('vehicle_id')->unsigned();
			// FK to lg_vcapability.id
			$table->integer('vcapability_id')->unsigned();
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
        Schema::dropIfExists('lg_vehiclecapability');
    }
}
