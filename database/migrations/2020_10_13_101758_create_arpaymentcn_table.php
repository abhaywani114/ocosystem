<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArpaymentcnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arpaymentcn', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to arpayment.id
            $table->integer('arpayment_id')->unsigned();
			// FK to creditnote.id
            $table->integer('creditnote_id')->unsigned();
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
        Schema::dropIfExists('arpaymentcn');
    }
}
