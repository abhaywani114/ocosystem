<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposLocationterminalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_locationterminal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('location_id')->unsigned();
            $table->integer('terminal_id')->unsigned();
            $table->enum('status', ['pending','active','suspended'])->
                default('active');
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
        Schema::dropIfExists('opos_locationterminal');
    }
}
