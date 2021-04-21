<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodcourtmerchantterminalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodcourtmerchantterminal', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to foodcourtmerchant.id
            $table->integer('foodcourtmerchant_id')->unsigned();
			// Terminal which has been assigned to the FoodCourt tenant.
			// FK to opos_terminal.id
            $table->integer('terminal_id')->unsigned();
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
        Schema::dropIfExists('foodcourtmerchantterminal');
    }
}
