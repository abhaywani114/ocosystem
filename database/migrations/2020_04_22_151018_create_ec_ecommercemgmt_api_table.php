<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcEcommercemgmtApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores all the API for a platform.
		 * ec_ecommercemgmt:api = 1:m */
        Schema::create('ec_ecommercemgmt_api', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to ec_ecommercemgmt.id
			$table->integer('ecommercemgmt_id')->unsigned();
			$table->string('api');
			$table->text('description');
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
        Schema::dropIfExists('ec_ecommercemgmt_api');
    }
}
