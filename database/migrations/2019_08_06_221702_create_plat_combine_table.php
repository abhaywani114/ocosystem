<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatCombineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_combine', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('openbill_id')->unsigned();
			$table->integer('terminal_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->integer('pax')->unsigned();

			$table->integer('combine_ftype_id')->unsigned();
			/*
             void = just created
             vacant = order is placed but not confirmed
             active = order is placed and confirmed */
			$table->enum('status',[
				'void','vacant','pending','active','cancelled','completed'
			])->default('void');
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
        Schema::dropIfExists('plat_combine');
    }
}
