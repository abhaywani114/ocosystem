<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicLocationkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores the location license key and other
		   identification for the setup of Ocenia */
        Schema::create('lic_locationkey', function (Blueprint $table) {
            $table->bigIncrements('id');
			// This is the location license key generated from FRANCHISOR's
			// location management
            $table->string('license_key')->unique();
			// FK to company.id, this is the FRANCHISEE's company_id
			$table->integer('company_id')->unsigned();
			// FK to location.id, this it the franchise location
			$table->integer('location_id')->unsigned();
			// Store whether this franchise location has setup Ocenia 
			$table->boolean('has_setup')->default(false);

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
        Schema::dropIfExists('lic_locationkey');
    }
}
