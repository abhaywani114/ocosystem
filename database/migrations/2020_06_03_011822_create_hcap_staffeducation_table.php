<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcapStaffeducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcap_staffeducation', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to hcap_staff.id
			$table->integer('hcap_staff_id')->unsigned();
			$table->datetime('from')->nullable();
			$table->datetime('to')->nullable();
			$table->string('course')->nullable();
			$table->string('school_university')->nullable();
			$table->text('remarks')->nullable();
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
        Schema::dropIfExists('hcap_staffeducation');
    }
}
