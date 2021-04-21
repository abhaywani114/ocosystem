<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcapStaffappraisalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcap_staffappraisal', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to hcap_staff.id
			$table->integer('hcap_staff_id')->unsigned();
			$table->datetime('from')->nullable();
			$table->datetime('to')->nullable();
			$table->text('manager_comment')->nullable();
			$table->text('staff_comment')->nullable();
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
        Schema::dropIfExists('hcap_staffappraisal');
    }
}
