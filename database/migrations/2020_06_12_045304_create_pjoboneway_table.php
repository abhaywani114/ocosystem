<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobonewayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjoboneway', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to pjob.id
			$table->integer('pjob_id')->unsigned();
			// FK to oneway.id
			$table->integer('oneway_id')->unsigned();
			// This is to select a oneway (contractor) for a pjob
			$table->boolean('active')->default(false);
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
        Schema::dropIfExists('pjoboneway');
    }
}
