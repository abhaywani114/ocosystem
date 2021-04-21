<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global', function (Blueprint $table) {
            $table->bigIncrements('id');

			/* This is the platform superadmin.
			 * Defaults to staff.systemid='1020000000001', make sure there
			 * is a corresponding users record */
            
			// $table->string('god_systemid')->default('1020000000001');
            $table->string('property');
            $table->string('value');

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
        Schema::dropIfExists('global');
    }
}
