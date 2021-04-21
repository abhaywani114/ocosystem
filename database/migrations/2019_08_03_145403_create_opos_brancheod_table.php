<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposBrancheodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_brancheod', function (Blueprint $table) {
            $table->bigIncrements('id');
			// The user who had pressed "Branch EOD'
			// FK to users.id
			$table->integer('eod_presser_user_id')->unsigned();
			// FK to location.id
			$table->integer('location_id')->unsigned();                     
			// Where the Branch EOD originated from
			// FK to opos_terminal.id
			$table->integer('terminal_id')->unsigned();                     
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
        Schema::dropIfExists('opos_brancheod');
    }
}
