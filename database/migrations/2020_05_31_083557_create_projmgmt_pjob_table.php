<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjmgmtPjobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projmgmtpjob', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to projmgmt.id
            $table->integer('projmgmt_id')->unsigned();
			// FK to pjob.id
			$table->integer('pjob_id')->unsigned();
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
        Schema::dropIfExists('projmgmt_pjob');
    }
}
