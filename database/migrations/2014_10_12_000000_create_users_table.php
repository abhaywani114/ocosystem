<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');	
            $table->string('name');		
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('access_code');
            $table->enum('type',['staff','introducer','partner_ins','admin'.'external'])->default('staff');
            $table->enum('status',
				['pending','active','inactive'])->default('pending');
            $table->enum('adminlevel',
				['normal','primary','secondary'])->default('normal');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
