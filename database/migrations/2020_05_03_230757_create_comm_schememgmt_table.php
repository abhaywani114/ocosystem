<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommSchememgmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comm_schememgmt', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to company.id
			$table->integer('company_id')->unsigned();
			// FK to comm_scheme.id
			$table->integer('comm_scheme_id')->unsigned();
			$table->enum('type', ['agent','staff','partner'])->nullable();
			// Amount of pool commission in MYR (cents)
			$table->integer('pool_amt')->unsigned()->nullable();
			// Amount of company commission in MYR (cents)
			$table->integer('commission_amt')->unsigned()->nullable();
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
        Schema::dropIfExists('comm_schememgmt');
    }
}
