<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjobuat', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to pjob.id
			$table->integer('pjob_id')->unsigned();
			$table->string('description');
			$table->integer('payment')->unsigned();
			$table->boolean('answer')->default(false);
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
        Schema::dropIfExists('pjobuat');
    }
}
