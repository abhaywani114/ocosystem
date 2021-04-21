<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrouplink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grouplink', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to groupinfo.id
			$table->integer('groupinfo_id')->unsigned();
			// FK to users.id
			$table->integer('initiator_user_id')->unsigned();
			// FK to users.id
			$table->integer('responder_user_id')->unsigned();
			// We allow you to login to our page
			$table->boolean('inbound_remote_login')->default(false);
			// You allow us to login to our page
			$table->boolean('outbound_remote_login')->default(false);
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
        Schema::dropIfExists('grouplink');
    }
}
