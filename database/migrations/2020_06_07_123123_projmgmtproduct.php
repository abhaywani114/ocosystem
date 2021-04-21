<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projmgmtproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('projmgmtproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pjob_id')->unsigned();
            $table->integer('pjobmerchant_id')->unsigned();
            $table->integer('product_id')->unsigned();
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
        //
    }
}
