<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobmerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// This table stores the merchants (contractors) which are related
		// to a pjob
        Schema::create('pjobmerchant', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to pjob.id
			$table->integer('pjob_id')->unsigned();
			// FK to merchant.id
			$table->integer('merchant_id')->unsigned();
			// This is to select a merchant (contractor) for a pjob
			$table->boolean('active')->default(false);
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
        Schema::dropIfExists('pjobmerchant');
    }
}
