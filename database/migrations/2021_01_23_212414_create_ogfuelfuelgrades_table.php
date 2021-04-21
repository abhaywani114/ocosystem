<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgfuelfuelgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogfuelfuelgrades', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to company.id
			$table->integer('company_id')->unsigned();
			// FK to location.id
			$table->integer('location_id')->unsigned();
			// FK to prd_ogfuel.id
			$table->integer('ogfuel_id')->unsigned();
			// FK to og_controller.id
			$table->integer('controller_id')->unsigned();


			/*
			{
				"Protocol":"jsonPTS",
					"Packets":[{
						"Id":1,
						"Type":"SetFuelGradesConfiguration",
						"Data":{
						"FuelGrades":[{
							"Id":1, // <---
							"Name":"Petrol",
							"Price":27.50
						},{
							"Id":2, // <---
							"Name":"Diesel",
							"Price":23.99
						}]
					}
				}]
			}
			*/

			// Fuelgrades_id for setFuelGradesConfiguration() API call
			$table->integer('fuelgrades_id')->unsigned();
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
        Schema::dropIfExists('ogfuelfuelgrades');
    }
}
