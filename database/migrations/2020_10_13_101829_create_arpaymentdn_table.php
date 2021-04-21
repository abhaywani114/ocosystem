<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArpaymentdnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arpaymentdn', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to arpayment.id
            $table->integer('arpayment_id')->unsigned();
			// FK to debitnote.id
            $table->integer('debitnote_id')->unsigned();
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
        Schema::dropIfExists('arpaymentdn');
    }
}
