<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores the service products used by pjobmerchant
		 * (contractors). This is separate from mainstream product and has its
		 * own systemid */
        Schema::create('pjobproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');	// This is NOT product.systemid!!
			$table->string('name');
			$table->integer('price')->unsigned();
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
        Schema::dropIfExists('pjobproduct');
    }
}
