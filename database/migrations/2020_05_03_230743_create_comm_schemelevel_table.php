<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommSchemelevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table defines the record for each level in a multilevel
		 * commission scheme */
        Schema::create('comm_schemelevel', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to comm_scheme.id
			$table->integer('comm_scheme_id')->unsigned();
			// Which level does this represent?
			$table->integer('level_no')->unsigned();
			// Company's commission in percent
			$table->float('company_pct')->unsigned();
			// Pool commission (bonus) in percent
			$table->float('pool_pct')->unsigned();
			// Agent's commission in percent
			$table->float('agent_pct')->unsigned();
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
        Schema::dropIfExists('comm_schemelevel');
    }
}
