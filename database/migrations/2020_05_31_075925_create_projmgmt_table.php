<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjmgmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projmgmt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
            $table->string('name')->nullable();
            $table->enum('status',['active','pending'])->default('pending');
            $table->integer('revenue')->unsigned()->default(0);
            $table->integer('duration')->unsigned()->default(0);
            $table->integer('cost')->unsigned()->default(0);
            $table->integer('receivable')->unsigned()->default(0);
            $table->integer('payable')->unsigned()->default(0);
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
        Schema::dropIfExists('projmgmt');
    }
}
