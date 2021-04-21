<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjmgmtdocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projmgmtdocument', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to projmgmt.id
			$table->integer('projmgmt_id')->unsigned();
			// Store documents in:
			// public/images/projmgmt/{projmgmt_id}/document/{docfile}
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
        Schema::dropIfExists('projmgmtdocument');
    }
}
