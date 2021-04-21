<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposBtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_btype', function (Blueprint $table) {
            $table->bigIncrements('id');

			/*
			This is the system name of the btype which will be used as the directory
			e.g. "food_beverage"

			The directory which the view files are stored for a 
			btype: views/opossum/{{btype}}
			e.g.
			view/opossum/food_beverage
			view/opossum/retail
			 */
			$table->string('btype');

			// This is the official of the business type for display
			// e.g. "Food & Beverage"
			$table->string('description');


			// Each btype can have its own customized opossum_header.blade.php
			// Exact file name is stored in header
			$table->string('header')->nullable();

			// Each btype can have its own customized opossum_c.blade.php
			// Exact file name is stored in screen_c
			$table->string('screen_c')->nullable();

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
        Schema::dropIfExists('opos_btype');
    }
}
