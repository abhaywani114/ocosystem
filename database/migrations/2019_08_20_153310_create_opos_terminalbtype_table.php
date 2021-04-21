<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposTerminalbtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_terminalbtype', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_terminal.id
			// 1 terminal can have many btypes
			$table->integer('terminal_id')->unsigned();
			$table->enum('btype',['food_beverage','retail','petrol_station']);
			// The directory which the view files are stored for a 
			// btype: views/opossum/{{directory}}
			// e.g.
			// view/opossum/food_beverage
			// view/opossum/retail
			$table->string('directory')->nullable();

			// Each btype can have its own customized opossum_header.blade.php
			// Exact file name is stored in header
			$table->string('header')->nullable();

			// Each btype can have its own customized opossum_c.blade.php
			// Exact file name is stored in screen_c
			$table->string('screen_c')->nullable();

 			// Each btype can have its own customized opossum_header.blade.php
			// Exact file name is stored in header
			$table->string('header')->nullable();


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
        Schema::dropIfExists('opos_terminalbtype');
    }
}
