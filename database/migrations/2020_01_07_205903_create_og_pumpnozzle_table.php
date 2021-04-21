<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgPumpnozzleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Linktable to relate
		   og_pump:nozzle = 1:m also
		   nozzle:product = 1:1
		   Note: That is NO table for nozzle */
        Schema::create('og_pumpnozzle', function (Blueprint $table) {
            $table->bigIncrements('id');
            // FK to og_pump.id
            $table->integer('pump_id');
			// From PTS2 configuration
            $table->integer('nozzle_no');
			// FK to prd_ogfuel.id, but
			// prd_ogfuel.product_id = product.id
            $table->integer('ogfuel_id');
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
        Schema::dropIfExists('og_pumpnozzle');
    }
}
