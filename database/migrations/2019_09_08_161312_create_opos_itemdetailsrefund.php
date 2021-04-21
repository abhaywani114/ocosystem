<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposItemdetailsrefund extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_itemdetailsrefund', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_itemdetails.id
			$table->integer('itemdetails_id')->unsigned();
			// FK to opos_refund.id
			$table->integer('refund_id')->unsigned();
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
        Schema::dropIfExists('opos_itemdetailsrefund');
    }
}
