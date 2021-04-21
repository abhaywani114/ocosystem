<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalControllerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_controller', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $c = new SystemID('controller');
            $table->string('systemid');
			// FK to company.id
            $table->integer('company_id')->unsigned();
			// FK to location.id
            $table->integer('location_id')->unsigned();
			// This is from the hardware;
			// e.g. 003A0043003A0043003A0043, 003A0043584B500B20373441
            $table->string('device_id')->unique();
			// The Firmware Release Date:
			// Release datetime of the current firmware
            $table->datetime('fw_rel_date')->nullable();
			// All supported pump protocols
            $table->string('pump_protocols')->nullable();
			// All supported probe protocols
            $table->string('probe_protocols')->nullable();
			// The current battery voltage
            $table->float('battery_voltage')->unsigned()->nullable();
			// The free storage left in KB; e.g. 7847936 KB
            $table->integer('free_storage')->unsigned()->nullable();
			// The total storage supported in KB; e.g. 7781376 KB
            $table->integer('total_storage')->unsigned()->nullable();
			// The local IP Address of the controller; e.g. 192.168.1.117
			// Programmed on the controller hardware
            $table->string('ipaddress');
			// The public IP Address of the controller; e.g. 50.43.42.4
			// Programmed from the router/firewall
            $table->string('public_ipaddress')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });


		// Linktable to relate local_controller:local_pump = 1:m 
        Schema::create('local_controllerpump', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to local_controller.id
            $table->integer('controller_id');
			// FK to local_pump.id
            $table->integer('pump_id');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });


        Schema::create('local_pump', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $a = new SystemID('pump');
			$table->string('systemid');
			// FK to opos_controller.id
			$table->integer('controller_id');
			$table->string('dispenser_serial_no')->nullable();
			// From PTS2 configuration
			$table->integer('pump_no')->unsigned();
			// FK to local_pts2_protocol.id
			$table->integer('pts2_protocol_id')->unsigned();
			$table->integer('baudrate')->unsigned();
			$table->integer('pump_port')->unsigned();
			$table->integer('comm_address')->unsigned();
			$table->boolean('delivered')->default(false);
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });


		/* Linktable to relate
		   local_pump:nozzle = 1:m also
		   nozzle:product = 1:1
		   Note: That is NO table for nozzle */
        Schema::create('local_pumpnozzle', function (Blueprint $table) {
            $table->bigIncrements('id');
            // FK to og_pump.id
            $table->integer('pump_id');
			// From PTS2 configuration
            $table->integer('nozzle_no');
			// FK to prd_ogfuel.id, but prd_ogfuel.product_id = product.id
			// This prd_ogfuel should have been synchronized with cloud
            $table->integer('ogfuel_id');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });


        Schema::create('local_pts2_protocol', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('protocol_no')->unsigned();
			$table->string('protocol_name');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });


        Schema::create('local_pts2_baudrate', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('index')->unsigned();
			$table->integer('baudrate')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });


        Schema::create('local_probe_protocol', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('protocol_no')->unsigned();
			$table->string('protocol_name');
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
        Schema::dropIfExists('local_controller');
        Schema::dropIfExists('local_controllerpump');
        Schema::dropIfExists('local_pump');
        Schema::dropIfExists('local_pumpnozzle');
        Schema::dropIfExists('local_pts2_protocol');
        Schema::dropIfExists('local_pts2_baudrate');
        Schema::dropIfExists('local_probe_protocol');
    }
}
