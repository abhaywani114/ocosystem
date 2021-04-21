<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposRefundremarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_refundremarks', function (Blueprint $table) {
            $table->bigIncrements('id');
			// Which refund transaction is this related to?
			// FK to opos_refund.id
            $table->integer('refund_id')->unsigned();
			// Capture user who wrote the remarks. FK to users.id
            $table->integer('user_id')->unsigned();
			// Actual remarks
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('opos_refundremarks');
    }
}
