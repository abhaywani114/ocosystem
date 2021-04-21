<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposShiftdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This stores the actual final calculated values of shift,
		 * from StartShift to EndShift. This is a summation of all the
		 * calculated values from all the invididual receipts contained
		 * within the shift period. */                           
        Schema::create('opos_shiftdetails', function (Blueprint $table) {
            $table->bigIncrements('id');

 			/* FK to opos_shift; terminal_id and location_id are
			 * accessed via opos_shift  */
            $table->integer('shift_id')->unsigned();

			/* FK to opos_eoddetails.id */
            $table->integer('eoddetails_id')->unsigned();

			/* Record the start datetime of the shift */
            $table->datetime('startdate') ;

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
        Schema::dropIfExists('opos_shiftdetails');
    }
}
