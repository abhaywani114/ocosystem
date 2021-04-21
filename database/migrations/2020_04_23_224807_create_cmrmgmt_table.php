<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmrmgmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmrmgmt', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');
			// FK to merchant.id
			$table->integer('merchant_id')->unsigned();
			$table->string('name')->nullable();
			// FK to users.id
			$table->integer('technician_user_id')->unsigned()->nullable();
			$table->enum('status',['active','pending'])->default('pending');
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
        Schema::dropIfExists('cmrmgmt');
    }
}
