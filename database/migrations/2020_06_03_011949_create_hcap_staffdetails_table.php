<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcapStaffdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcap_staffdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to hcap_staff.id
			$table->integer('hcap_staff_id')->unsigned();
			$table->string('department')->nullable();
			$table->string('position')->nullable();
			$table->string('reponsibility')->nullable();
			// Salary is stored in cents
			$table->integer('salary')->unsigned()->nullable();

			// EPF contribution in percentage
			$table->float('epf_employee')->unsigned()->nullable();
			$table->float('epf_employer')->unsigned()->nullable();

			// SOCSO contribution in percentage
			$table->float('socso')->unsigned()->nullable();

			$table->string('allowance_type')->nullable();
			// Allowance is in cents
			$table->integer('allowance_amt')->unsigned()->nullable();

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
        Schema::dropIfExists('hcap_staffdetails');
    }
}
