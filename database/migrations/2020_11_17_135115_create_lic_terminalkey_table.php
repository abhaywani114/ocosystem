<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicTerminalkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores the terminal license key for the setup of
		   OPOSsum terminals, which is just a client hosted in an Oceania
		   server */
        Schema::create('lic_terminalkey', function (Blueprint $table) {
            $table->bigIncrements('id');
			// License key generated from a FRANCHISEE's terminal list
            $table->string('license_key')->unique();
			// FK to opos_terminal.id, this is a franchise terminal
			$table->integer('terminal_id')->unsigned();
			// Store whether this OPOSsum terminal has been setup
			$table->boolean('has_setup')->default(false);

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
        Schema::dropIfExists('lic_terminalkey');
    }
}
