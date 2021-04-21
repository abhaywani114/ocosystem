<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArpaymentinvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arpaymentinv', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to arpayment.id
            $table->integer('arpayment_id')->unsigned();
			// FK to invoice.id
            $table->integer('invoice_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arpaymentinv');
    }
}
