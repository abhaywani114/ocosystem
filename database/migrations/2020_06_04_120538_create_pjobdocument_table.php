<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobdocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjobdocument', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to pjob.id
			$table->integer('pjob_id')->unsigned();
			// Store documents in:
			// public/images/pjob/{pjob_id}/document/{docfile}
			$table->string('docfile');
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
        Schema::dropIfExists('pjobdocument');
    }
}
