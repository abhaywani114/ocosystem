<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpcrformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpcrform', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('report_date');
            $table->string('region');
            $table->integer('cpcrmgmt_id')->unsigned();
            $table->string('company')->nullable();
            $table->string('crane_model')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('job_site')->nullable();
            $table->string('job_length')->nullable();
            $table->string('hook_height')->nullable();
            $table->enum('falls',['2','4'])->nullable();
            $table->string('foundation_a_checks')->nullable();
            $table->string('foundation_a_grease')->nullable();
            $table->string('hoisting_system_a_checks')->nullable();
            $table->string('hoisting_system_b_checks')->nullable();
            $table->string('hoisting_system_c_checks')->nullable();
            $table->string('hoisting_system_d_checks')->nullable();
            $table->string('hoisting_system_e_checks')->nullable();
            $table->string('hoisting_system_f_checks')->nullable();
            $table->string('hoisting_system_a_grease')->nullable();
            $table->string('hoisting_system_b_grease')->nullable();
            $table->string('hoisting_system_c_grease')->nullable();
            $table->string('hoisting_system_d_grease')->nullable();
            $table->string('hoisting_system_e_grease')->nullable();
            $table->string('hoisting_system_f_grease')->nullable();
            $table->string('slewing_system_a_checks')->nullable();
            $table->string('slewing_system_b_checks')->nullable();
            $table->string('slewing_system_c_checks')->nullable();
            $table->string('slewing_system_d_checks')->nullable();
            $table->string('slewing_system_a_grease')->nullable();
            $table->string('slewing_system_b_grease')->nullable();
            $table->string('slewing_system_c_grease')->nullable();
            $table->string('slewing_system_d_grease')->nullable();
            $table->enum('trolley_luffing_system_check',
				['trolley','luffing'])->nullable();
            $table->string('trolley_luffing_system_a_checks')->nullable();
            $table->string('trolley_luffing_system_b_checks')->nullable();
            $table->string('trolley_luffing_system_c_checks')->nullable();
            $table->string('trolley_luffing_system_d_checks')->nullable();
            $table->string('trolley_luffing_system_e_checks')->nullable();
            $table->string('trolley_luffing_system_f_checks')->nullable();
            $table->string('trolley_luffing_system_a_grease')->nullable();
            $table->string('trolley_luffing_system_b_grease')->nullable();
            $table->string('trolley_luffing_system_c_grease')->nullable();
            $table->string('trolley_luffing_system_d_grease')->nullable();
            $table->string('trolley_luffing_system_e_grease')->nullable();
            $table->string('trolley_luffing_system_f_grease')->nullable();
            $table->string('electrical_system_a_checks')->nullable();
            $table->string('electrical_system_b_checks')->nullable();
            $table->string('electrical_system_c_checks')->nullable();
            $table->string('electrical_system_d_checks')->nullable();
            $table->string('electrical_system_e_checks')->nullable();
            $table->string('electrical_system_f_checks')->nullable();
            $table->string('electrical_system_a_grease')->nullable();
            $table->string('electrical_system_b_grease')->nullable();
            $table->string('electrical_system_c_grease')->nullable();
            $table->string('electrical_system_d_grease')->nullable();
            $table->string('electrical_system_e_grease')->nullable();
            $table->string('electrical_system_f_grease')->nullable();
            $table->enum('overall_condition_mentioned',
				['poor', 'fair','good'])->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('cpcrform');
    }
}
