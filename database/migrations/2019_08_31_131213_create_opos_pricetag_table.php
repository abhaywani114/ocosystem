<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposPricetagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_pricetag', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_terminal.id
            $table->integer('terminal_id')->unsigned();
			// This stores the HTML for the entire A4 page of the pricetag.
			// Each onblur updates this record for the same terminal
            $table->text('pricetag')->nullable();
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
        Schema::dropIfExists('opos_pricetag');
    }
}
