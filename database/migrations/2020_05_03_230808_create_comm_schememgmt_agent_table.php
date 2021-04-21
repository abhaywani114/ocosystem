<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommSchememgmtAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comm_schememgmt_agent', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to comm_scheme.id
            $table->integer('comm_scheme_id')->unsigned();
			// FK to comm_agent.id
            $table->integer('agent_id')->unsigned();
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
        Schema::dropIfExists('comm_schememgmt_agent');
    }
}
