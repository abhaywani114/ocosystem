<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersmobroleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersmobrole', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to users.id
			$table->integer('user_id')->unsigned();
			// FK to mobrole.id
            $table->integer('mobrole_id')->unsigned();
			// FK to company.id
            $table->integer('company_id')->unsigned();
            $table->softDeletes();
            $table->nullableTimestamps();
            $table->engine = 'ARIA';
            $table->unique(['user_id', 'mobrole_id', 'company_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersmobrole');
    }
}
