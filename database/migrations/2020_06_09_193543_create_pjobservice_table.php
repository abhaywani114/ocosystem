<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores the services and the costs from a contractor
		 * in a pjob. This services is a specially stored in pjobproduct
		 * and it's different from the mainstream products. It has it's own
		 * separate systemid */
        Schema::create('pjobservice', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to pjobmerchant.id
			$table->integer('pjobmerchant_id')->unsigned();
			// FK to pjobproduct.id
			$table->integer('pjobproduct_id')->unsigned();

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
        Schema::dropIfExists('pjobservice');
    }
}
