<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmrformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Implementaton of a Corrective Maintenance Report, note that
		 * a part used list is in a link table: cmrparts_used */
        Schema::create('cmrform', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('cmrdate');
			// FK to cmrmgmt.id
            $table->integer('cmrmgmt_id')->unsigned();
			$table->integer('job_no')->unsigned()->nullable();
			$table->enum('region',['southern_region','central_region','eastern_region',
				'northern_region','sabah_sarawak'])->nullable();
			$table->string('location_address')->nullable();
			$table->text('complaint')->nullable();
			$table->string('complained_by')->nullable();
			$table->string('equipment_serialno')->nullable();
			$table->string('equipment_modelno')->nullable();
			$table->datetime('start_time')->nullable();
			$table->datetime('sitein_time')->nullable();
			$table->datetime('siteout_time')->nullable();
			$table->datetime('return_time')->nullable();
			$table->integer('start_mileage')->nullable();
			$table->integer('return_mileage')->nullable();
			$table->integer('total_mileage')->nullable();
			$table->string('travelled_from')->nullable();
			// Note that travelled_to is in linktable:
			// cmrtravel
			$table->integer('sla')->unsigned()->nullable();
			$table->text('work_performed')->nullable();
			$table->text('remarks')->nullable();
			$table->text('attended_by')->nullable();

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
        Schema::dropIfExists('cmrform');
    }
}
