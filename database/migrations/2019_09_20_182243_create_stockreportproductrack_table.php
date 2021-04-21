<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockreportproductrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockreportproductrack', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to stockreportproduct.id
			$table->integer('stockreportproduct_id')->unsigned();
			// FK to rack.id
			$table->integer('rack_id')->unsigned();
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
        Schema::dropIfExists('stockreportproductrack');
    }
}
