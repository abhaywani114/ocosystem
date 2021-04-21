<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposItemdetailsremarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_itemdetailsremarks', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('itemdetails_id')->unsigned();
			/* This is from Product: Inventory/Qty/Product Ledger
			 * We support a historical remarks trail, as we can
			 * have multiple records with the same itemdetails_id */
			$table->text('remarks')->nullable();

			/* This is to capture the  logged in user who had entered the remarks */
			$table->integer('user_id')->unsigned();

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
        Schema::dropIfExists('opos_itemdetailsremarks');
    }
}
