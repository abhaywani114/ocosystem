<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores the purchaseorder (PO) which is issued by 
		 * the dealer (a merchant) to the supplier (also a merchant).
		 * However there are 2 types of merchant, a registered one with
		 * merchant.id and a non-registered one with oneway.id */
        Schema::create('purchaseorder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');

			// FK to merchant.id for the issuer (dealer).
			// This is the party who creates the PO.
			$table->integer('issuer_merchant_id')->unsigned();
			// FK to location.id for the issuer (dealer)
			$table->integer('issuer_location_id')->nullable()->unsigned();

			/* Supplier can be 2 types
			 * a) twoway: a regular merchant, merchant.id is available
			 *    merchantpurchaseorder is used as linktable
			 * b) oneway: NO merchant.id, ONLY oneway.id is available
			 *	  onewaypurchaseorder is used as linktable
			 */

			// *** VOID attributes ***
			$table->boolean('is_void')->default(false);
			// FK to users.id, to store who had voided this SO
			$table->integer('void_user_id')->unsigned()->nullable();
			$table->text('void_reason')->nullable();

			$table->enum('status',['pending','confirmed'])->
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
        Schema::dropIfExists('purchaseorder');
    }
}
