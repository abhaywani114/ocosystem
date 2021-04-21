<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
			// This is for Vehicle ID
			$table->string('systemid');
			$table->string('number_plate');
			$table->enum('type',
				['mpv','van','1ton','3ton','5ton',
				'10ton','container20','container40'])->nullable();
			// Maximum volumetric capacity
			$table->integer('max')->unsigned()->nullable();
			$table->enum('capability',
				['tail_lift','semi_trailer','jumbo_trailer',
					'flatbed','straight','refrigerated'])->nullable();
			$table->enum('ownership',
				['owned','rented','leased'])->default('owned');
			// FK to users.id
			$table->integer('deliveryman_user_id')->unsigned()->nullable();
			// FK to location.id
			$table->integer('location_id')->unsigned()->nullable();
			// Gurrent GPS coordinates, stored in degrees
			$table->float('longitude')->nullable();
			$table->float('latitude')->nullable();
			// This for access card number
			$table->string('rfid_no')->nullable();
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
        Schema::dropIfExists('vehicle');
    }
}
