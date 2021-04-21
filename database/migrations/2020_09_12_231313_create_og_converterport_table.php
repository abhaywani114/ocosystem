<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgConverterportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_converterport', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->string('systemid');
	    // FK to og_converter.id
	    $table->integer('converter_id')->unsigned();
	    $table->string('dispenser_connected')->nullable();
	    $table->string('dispenser_serialno')->nullable();
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
        Schema::dropIfExists('og_converterport');
    }
}
