<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminalipaddrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Table to store ipaddr for each terminal. Typically it is a 
		 * standalone Laravel system bundled with a terminal */
        Schema::create('terminalipaddr', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to company.id. This is the Franchisee's company
			$table->integer('company_id');
			// FK to location.id
			$table->integer('location_id');
			// FK to opos_terminal.id
			$table->integer('terminal_id');
			$table->string('ipaddr');
			$table->enum('tsystem',['poa','oceania','ministn'])->nullable();
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
        Schema::dropIfExists('terminalipaddr');
    }
}
