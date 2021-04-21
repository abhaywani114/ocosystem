<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgPumpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_pump', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $a = new SystemID('pump');
			$table->string('systemid');
			// FK to opos_controller.id
			$table->integer('controller_id');
			$table->string('dispenser_serial_no')->nullable();
			// From PTS2 configuration
			$table->integer('pump_no')->unsigned();
			// FK to og_pts2_protocol.id
			$table->integer('og_pts2_protocol_id')->unsigned();
			$table->integer('baudrate')->unsigned();
			$table->integer('pump_port')->unsigned();
			$table->integer('comm_address')->unsigned();
			$table->boolean('delivered')->default(false);
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
        Schema::dropIfExists('og_pump');
    }
}
