<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgControllerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_controller', function (Blueprint $table) {
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
            $table->datetime('fw_rel_date');
			// All supported pump protocols
            $table->string('pump_protocols');
			// All supported probe protocols
            $table->string('probe_protocols');
			// The current battery voltage
            $table->float('battery_voltage')->unsigned();
			// The free storage left in KB; e.g. 7847936 KB
            $table->integer('free_storage')->unsigned();
			// The total storage supported in KB; e.g. 7781376 KB
            $table->integer('total_storage')->unsigned();
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('og_controller');
    }
}
