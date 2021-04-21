<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposRefundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table records all refunds against product via receipts */
        Schema::create('opos_refund', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');

			/* This is the primary FK back to opos_receiptproduct */
			$table->integer('receiptproduct_id')->unsigned();

			/* To itemized items when there are more than 1 qty of
			   the same product */
			$table->integer('item_no')->unsigned();

			/* For Cp cash_partial (Cash Partial Refund) */
			$table->float('refunded_amt')->unsigned()->default(0);

			/* This is the person who had confirmed the refund */
			$table->integer('confirmed_user_id')->unsigned();

 			/* ------- To support Refund --------
				Cp cash_partial: Cash Partial
							 Partial Refund (qty++ partial with fraction)
				X  reject:   Approached but non-refundable
							 Record in DB only
				C  cash:     Cash Refund
							 Stock In (qty++)
				Cx cash_dmg: Cash Refund (Damage)
							 Stock In (dmg++)
				D  exch:     Exchange with Stocks 
							 No change in qty. Record in DB only
				Dx exch_dmg: Exchange with Stocks (Damaged)
							 Stock Out (qty--)
							 Stock In  (dmg++)
			*/ 
			$table->enum('refund_type',['X','C','Cx','Cp','D','Dx']);
 			$table->enum('status',[
				'active','rejected','confirmed','pending' ])->
				default('pending');

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
        Schema::dropIfExists('opos_refund');
    }
}
