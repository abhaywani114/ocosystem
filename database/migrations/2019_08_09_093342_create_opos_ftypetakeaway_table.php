<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposFtypetakeawayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This link table relates opos_ftype (table) with the takeaway_no
		 * and the receipt_id in a single table */
        Schema::create('opos_ftypetakeaway', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_receipt.id (this is the primary key NOT systemid
			$table->integer('receipt_id')->unsigned();
			// FK to opos_ftype.id
			$table->integer('ftype_id')->unsigned()->nullable();
			// This is like "A0043". It is an alphabet "A" to "Z" followed
			// by a 4 zero-prefixed sequence number from "takeaway_seq"
			$table->string('takeaway_no');
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
        Schema::dropIfExists('opos_ftypetakeaway');
    }
}
