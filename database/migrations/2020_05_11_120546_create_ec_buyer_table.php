<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec_buyer', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_receipt.id
			$table->integer('receipt_id')->unsigned();
			$table->enum('status',
				['pending','executed','dropped'])->
				default('pending');
			$table->enum('delivery', ['pickup','delivered']);
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
        Schema::dropIfExists('ec_buyer');
    }
}
