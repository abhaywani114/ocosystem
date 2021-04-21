<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgFuelpriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_fuelprice', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to prd_ogfuel.id
            $table->integer('ogfuel_id')->unsigned()->nullable();
			// This datetime is when the new price will effective from
            $table->datetime('start')->nullable();
            $table->integer('price')->unsigned()->nullable();
			// This stores the user who created this record. FK to users.id
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('og_fuelprice');
    }
}
