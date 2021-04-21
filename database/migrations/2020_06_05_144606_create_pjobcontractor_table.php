<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobcontractorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This stores the contractor for a particular job:
		 * pjob:pjobcontractor = 1:m */
        Schema::create('pjobcontractor', function (Blueprint $table) {
            $table->bigIncrements('id');
			// This contractor is related to pjob_id
			$table->integer('pjob_id')->unsigned();
			// Contractors are actually suppliers, so we use merchant_id
			$table->integer('merchant_id')->unsigned();
			// This service amount is monetary value and is stored in cents
			$table->integer('service_amt')->unsigned();
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
        Schema::dropIfExists('pjobcontractor');
    }
}
