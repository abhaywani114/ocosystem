<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposFtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_ftype', function (Blueprint $table) {
            $table->bigIncrements('id');
			// Default number of a facility
            $table->string('fnumber');
			/* Obsoleted: Moved to opos_tablename
			// A user-defined facility alias for a facility number
            $table->string('falias');
			*/
			// FK to location.id
            $table->integer('location_id')->unsigned;
			// FK to oos_terminal.id
            $table->integer('terminal_id')->unsigned;
			// This is to store pax per table
            $table->integer('pax')->unsigned->default(1);;
            $table->string('name');			//optional
            $table->string('description');	//optional
			// stable (split table) -> for Combine/Split Tables in PlatyPOS
			$table->enum('ftype',[
				'spa','hotel','car', 'table','stable','skip'])->
				default('table');                                   
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
        Schema::dropIfExists('opos_ftype');
    }
}
