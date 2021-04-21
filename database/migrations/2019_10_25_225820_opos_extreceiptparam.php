<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OposExtreceiptparam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_extreceiptparam', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_receipt.id
			$table->integer('receipt_id')->unsigned()->nullable();
			// FK to opos_brancheod.id
			$table->integer('eod_id')->unsigned()->nullable();
			// FK to opos_shift.id
			$table->integer('shift_id')->unsigned()->nullable();
			$table->integer('cashvoucher_applied')->unsigned()->nullable();
			/* From Petrol Station business type */
			$table->integer('trade_debtor')->unsigned()->nullable();     
			$table->integer('cheque')->unsigned()->nullable();     
			$table->integer('opt')->unsigned()->nullable();     
			$table->integer('fleet_card')->unsigned()->nullable();     
			$table->integer('cash_card')->unsigned()->nullable();     

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
        Schema::dropIfExists('opos_extreceiptparam');
    }
}
