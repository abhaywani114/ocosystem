<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFcApisecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/*
		Forecourt Controller API Security: this is for the protection of
		the API used during synchronization of controller configuration data
		*/
        Schema::create('fc_apisecurity', function (Blueprint $table) {
            $table->bigIncrements('id');
			// This is from .env; e.g. 
			// APP_KEY=base64:hclAQJ83KxowJ6t/kCyf4JBPjR6qSpuWzQAQgaq1+jQ=
			$table->string('app_key');
			// This is from company.systemid
			$table->string('company_systemid');
			// FK to location.id
			$table->integer('location_id')->unsigned();
			// FK to location.systemid for source
			$table->string('source_location_systemid');
			// FK to location.systemid for destination
			$table->string('dest_location_systemid');
			// IP Address of destination POS; e.g. 10.11.12.13:8888
			$table->string('dest_ipaddr');
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
        Schema::dropIfExists('fc_apisecurity');
    }
}
