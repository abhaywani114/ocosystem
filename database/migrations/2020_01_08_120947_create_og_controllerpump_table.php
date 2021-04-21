<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgControllerpumpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// Linktable to relate og_controller:og_pump = 1:m 
        Schema::create('og_controllerpump', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to og_controller.id
            $table->integer('controller_id');
			// FK to og_pump.id
            $table->integer('pump_id');
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
        Schema::dropIfExists('og_controllerpump');
    }
}
