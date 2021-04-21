<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposReceiptdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This stores the actual final calculated values of a receipt, which
		 * is a summation of all the calculated values from all the individual
		 * items contained within a receipt:
				∘ total_amount
				∘ rounding
				∘ item_amount
				∘ sst
				∘ discount
				∘ service_charge
			• In addition to that it stores the various forms of payments
			which was used for that receipt. Again it is the final
			calculated values which is used in the receipt and not the raw
			percentages:
				∘ cash_received
				∘ point
				∘ wallet
				∘ creditcard
			• There is also a switch to capture whether this receipt has been
				voided.
				∘ If true, the entire value to the receipt will be zero.
		*/                        
        Schema::create('opos_receiptdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
			/* FK to opos_receipt */
            $table->integer('receipt_id')->unsigned();

			/* This stores all the calculated values in cents */
			/* total+rounding = (item_amount+SST) + discount + service_charge
			 */
			$table->integer('total')->unsigned();
			$table->integer('rounding');

			/* These 4 values must add up to total_amount + rounding */
			$table->integer('item_amount')->unsigned();
			$table->integer('sst')->unsigned();
			$table->integer('discount')->unsigned();
			$table->integer('service_charge')->unsigned();

			/* Capturing values from screen B */
			$table->integer('cash_received')->unsigned();
			$table->integer('change')->unsigned();
			$table->integer('creditcard')->unsigned();
			$table->integer('point')->unsigned();
			$table->integer('wallet')->unsigned();

			/* This is to capture the voidance of the receipt. If false,
			 * the total_amount+rounding = 0. */
			$table->boolean('void')->default(false);                   

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
        Schema::dropIfExists('opos_receiptdetails');
    }
}
