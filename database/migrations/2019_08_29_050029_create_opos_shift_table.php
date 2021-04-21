<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_shift', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_eoddetails.id
			$table->integer('eoddetails_id')->unsigned()->nullable();
			// FK to users.id, to capture the person who
			// clicked on "Change Shift"
			$table->integer('endshift_presser_user_id')->unsigned()->nullable();
			// FK to opos_terminal.id
			$table->integer('terminal_id')->unsigned()->nullable();
			// FK to location.id
			$table->integer('location_id')->unsigned()->nullable();
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
        Schema::dropIfExists('opos_shift');
    }
}
