<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisemerchantloctermTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisemerchantlocterm', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to franchisemerchantloc.id
			$table->integer('franchisemerchantloc_id')->unsigned();
			// Stores a terminal in a franchise location. FK to terminal.id
			$table->integer('terminal_id')->unsigned();
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
        Schema::dropIfExists('franchisemerchantlocterm');
    }
}
