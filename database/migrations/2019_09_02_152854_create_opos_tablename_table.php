<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposTablenameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_tablename', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_terminal.id
			$table->integer('terminal_id')->unsigned();
			// Will have A-Z, 1-200
			$table->string('default_name');
			$table->string('new_name')->nullable();
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
        Schema::dropIfExists('opos_tablename');
    }
}
