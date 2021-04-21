<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocktakemgmtuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocktakemgmtuser', function (Blueprint $table) {
            $table->bigIncrements('id');
			/* FK to stocktakemgmt.id */
            $table->integer('stocktakemgmt_id')->unsigned();
			/* FK to users.id, stocktakemgmt:user = 1:m
			 * 1 stocktakemgmt event can have many users participating, each handling
			 * one stockreport */
            $table->integer('stocktakemgmt_user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('stocktakemgmtuser');
    }
}
