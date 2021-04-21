<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtStockreportproductrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ext_stockreportproductrack', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to stockreportproduct.id
			$table->integer('ext_stockreportproduct_id')->unsigned();
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
        Schema::dropIfExists('ext_stockreportproductrack');
    }
}
