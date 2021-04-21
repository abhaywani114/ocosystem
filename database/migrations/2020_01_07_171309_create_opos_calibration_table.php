<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposCalibrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_calibration', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $systemid = new SystemID('calibration');
			$table->string('systemid');
			// FK to location.id
			$table->integer('location_id')->unsigned();
			// This is the Pump No. which is seen physically in the station
			$table->integer('pump_no')->unsigned();
			// This is the nozzle which has been used for the calibration
			$table->integer('nozzle')->unsigned();
			// FK to opos_terminal.id
			// opos_calibration.terminal_id = opos_terminal.id
			$table->integer('terminal_id')->unsigned();
			// FK to users.id for staff
			$table->integer('staff_user_id')->unsigned();
			// Storage of calibrated volume per receipt
			$table->float('total_litre')->unsigned();
			// Local storage for logo and address
			$table->string('local_logo');
			$table->string('local_address');
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('opos_calibration');
    }
}
