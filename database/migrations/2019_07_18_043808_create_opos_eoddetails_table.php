<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposEoddetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This stores the actual final calculated values of a business day,
		 * from Start to EOD. This is a summation of all the calculated values
		 * from all the invididual receipts contained within Start to
		 * EOD period. */                           
        Schema::create('opos_eoddetails', function (Blueprint $table) {
            $table->bigIncrements('id');

 			/* FK to opos_brancheod.id */
            $table->integer('eod_id')->unsigned();

			/* Record the start date */
            $table->datetime('startdate');

			/* FK to opos_logterminal */
            $table->integer('logterminal_id')->unsigned();

			$table->integer('total_amount')->unsigned();
			$table->integer('rounding');

 			/* These 4 values must add up to total_amount + rounding */
			$table->integer('sales')->unsigned();
			$table->integer('sst')->unsigned();
			$table->integer('discount')->unsigned();
			$table->integer('service_charge')->unsigned();

			/* Capturing values from screen B */
			$table->integer('cash')->unsigned();
			$table->integer('cash_change')->unsigned();
			$table->integer('creditcard')->unsigned();
			$table->integer('otherpoints')->unsigned();
			$table->integer('wallet')->unsigned();     

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
        Schema::dropIfExists('opos_eoddetails');
    }
}
