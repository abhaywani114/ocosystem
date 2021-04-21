<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatSplitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_split', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('openbill_id')->unsigned()->nullable();
			$table->integer('terminal_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->integer('split_ftype_id')->unsigned()->nullable();
			$table->integer('pax')->unsigned()->nullable();

			/* This is for the split table number, e.g.: 2a, 3b, 4c */
			$table->string('split_fnumber');

			/* Yawar
			 void = just created
			 vacant = order is placed but not confirmed
			 active = order is placed and confirmed */

			/* Original Chris 
			 pending = just creeated
			 active  = with order */
			$table->enum('status',[
				'void','vacant','pending','active','cancelled','completed'
			])->default('pending');
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
        Schema::dropIfExists('plat_split');
    }
}
