<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgPumplogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This is just to store the results of PTS2@PumpGetStatus() */
        Schema::create('og_pumplog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('controller_id');
            $table->integer('pump')->unsigned();;
            $table->integer('nozzle')->unsigned();;
            $table->string('product')->nullable();
            $table->integer('price')->unsigned();
            $table->integer('transaction')->unsigned();
            $table->integer('amount')->unsigned();
            $table->float('volume')->unsigned();
			// FK to merchant.id
			$table->integer('merchant_id')->unsigned();
            $table->string('user')->nullable();
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
        Schema::dropIfExists('og_pumplog');
    }
}
