<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposDamagerefundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_damagerefund', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_refund.id
            $table->integer('refund_id')->unsigned();
            $table->integer('damage_qty');
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
        Schema::dropIfExists('opos_damagerefund');
    }
}
