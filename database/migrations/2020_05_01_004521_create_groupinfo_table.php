<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupinfo', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to users.id
			$table->integer('owner_user_id')->unsigned();
			$table->string('groupname')->nullable();
			// This is an image filename, save to:
			// public/image/company/{company_id}/groupicon
			$table->string('groupicon')->nullable();
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
        Schema::dropIfExists('groupinfo');
    }
}
