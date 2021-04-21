<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmrformServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmrform_service', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('cmrform_id');
			$table->enum('service',['service_station',
				'filling_station','consumer',
				'submersible_type','suction_type']);
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
        Schema::dropIfExists('cmrform_service');
    }
}
