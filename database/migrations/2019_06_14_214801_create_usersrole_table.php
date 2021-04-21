<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersroleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersrole', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to users.id
			$table->integer('user_id')->unsigned();
			// FK to role.id
            $table->integer('role_id')->unsigned();
			// FK to company.id
            $table->integer('company_id')->unsigned();
            $table->softDeletes();
            $table->nullableTimestamps();
            $table->engine = 'ARIA';
            $table->unique(['user_id', 'role_id', 'company_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersrole');
    }
}
