<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table is to store any attachments (documents or images)
		 * for any forms. All columns are optional except for the filename */
        Schema::create('attachment', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to company.id, this attachment belongs to this company
			$table->integer('company_id')->unsigned();
			$table->string('name')->nullable();
			$table->string('description')->nullable();
			// This filename will be appended to the path:
			// public/company/{company_id}/attachment/{attachment_id}/filename
			$table->string('filename');

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
        Schema::dropIfExists('attachment');
    }
}
