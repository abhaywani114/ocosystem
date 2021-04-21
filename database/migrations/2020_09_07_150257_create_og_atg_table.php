<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgAtgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_atg', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $a = new SystemID('atg');
			$table->string('systemid');
			// FK to opos_controller.id
			$table->integer('controller_id');
			// FK to og_tank.id
			$table->integer('tank_id')->unsigned();
			// From ATG configuration
			$table->integer('tank_no')->unsigned();
			// FK to og_probe_protocol.id
			$table->integer('og_probe_protocol_id')->unsigned();
			$table->integer('baudrate')->unsigned();
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
        Schema::dropIfExists('og_atg');
    }
}
