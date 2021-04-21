<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsrformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Implementaton of a Crane Service Report, note that
		 * a part used list is in a link table: csrparts_used */
        Schema::create('csrform', function (Blueprint $table) {
            $table->bigIncrements('id');

            /*this block was added by Udemezue*/
            $table->date('date_started');
            $table->date('date_completed');
            $table->string('customer')->nullable();
            $table->string('installation_dismantling_base')->nullable();
            $table->string('installation_dismantling_mast')->nullable();
            $table->string('installation_dismantling_collar')->nullable();
            $table->string('collar_installation_no')->nullable();
            $table->string('wall_slab_no')->nullable();
            $table->string('i_beam_length')->nullable();
            $table->string('quantity')->nullable();
            $table->string('jacking_extension_mast')->nullable();
            $table->string('ph_tie_quantity')->nullable();
            $table->string('internal_jacking_no')->nullable();
            $table->string('equipment_tc_ph_no')->nullable();
            /*end of block*/

			// FK to csrmgmt.id
            $table->integer('csrmgmt_id')->unsigned();
			//$table->integer('job_no')->unsigned()->nullable();
			$table->enum('region',['southern_region','central_region','eastern_region',
				'northern_region','sabah_sarawak'])->nullable();
			$table->string('site')->nullable();
			$table->text('complaint')->nullable();
			//$table->string('complained_by')->nullable();
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
			// csrtravel
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
        Schema::dropIfExists('csrform');
    }
}
