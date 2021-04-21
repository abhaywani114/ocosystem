<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatCounterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_counter', function (Blueprint $table) {
            $table->bigIncrements('id');

			/* 7. Counter
				Platform = 1
				Type = 07
				Sequence = counter_seq
				e.g. 107xxxxxxxxxx */
            $table->string('systemid');

 			/* Where this counter is located */
            $table->integer('location_id')->unsigned();

			/* Where this counter is attached to */
            $table->integer('terminal_id')->unsigned();

			/* Generic text description of the counter */
            $table->string('description')->nullable();

			/* Short name of the counter */
            $table->string('name')->nullable();;

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
        Schema::dropIfExists('plat_counter');
    }
}
