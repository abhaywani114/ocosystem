<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationipaddrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Table to store ipaddr for each location. There is a possibility of
		 * having multiple IP addresses per location. This tsystem has distinct
		 * servers and terminal clients. */
        Schema::create('locationipaddr', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('company_id');
			$table->integer('location_id');
			$table->string('ipaddr');
			$table->enum('tsystem',['oceania']);
			$table->unique(['company_id','location_id']);
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
        Schema::dropIfExists('locationipaddr');
    }
}
