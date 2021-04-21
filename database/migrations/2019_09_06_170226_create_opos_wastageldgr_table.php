<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposWastageldgrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_wastageldgr', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('product_id')->unsigned();
			$table->float('qty')->unsigned()->default(0);
			// To store Wastage Decimal
			$table->float('wdecimal')->unsigned()->default(0);
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
        Schema::dropIfExists('opos_wastageldgr');
    }
}
