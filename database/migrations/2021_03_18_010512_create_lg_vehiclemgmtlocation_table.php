<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLgVehiclemgmtlocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lg_vehiclemgmtlocation', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to lg_vehiclemgmt.id
			$table->integer('vehiclemgmt_id')->unsigned();
			// FK to location.id
			$table->integer('location_id')->unsigned();
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
        Schema::dropIfExists('lg_vehiclemgmtlocation');
    }
}
