<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GanchattPjobLink extends Migration
{
    public function up()
    {
        Schema::create('ganchatt_pjob_link', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('source');
            $table->integer('target');
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('ganchatt_pjob_link');
    }
}
