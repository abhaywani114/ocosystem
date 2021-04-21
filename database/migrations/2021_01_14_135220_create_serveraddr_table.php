<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServeraddrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serveraddr', function (Blueprint $table) {
            $table->bigIncrements('id');
            // FK to location.id
            $table->integer('location_id')->unsigned();
            // IP Addr of the server
            $table->string('ip_addr')->nullable();
            // HW/MAC Addr of the server (via arp -an)
            $table->string('hw_addr')->nullable();
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
        Schema::dropIfExists('serveraddr');
    }
}
