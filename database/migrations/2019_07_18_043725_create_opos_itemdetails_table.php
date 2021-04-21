<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposItemdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This stores transaction component values, which is the final
		 * calculated for each item as it occurs. in OPOSssum. It calculates
		 * the components according to the master
		 * formula for OPOSsum:
			∘ amount
			∘ rounding
			∘ price
			∘ sst
			∘ discount
			∘ service_charge

			* Specials are handled internally to the product itself. Product
			* amount includes specials subject to qty, SST and discount
			* modifiers.
			*
			* HOWEVER, external modules has NO VISIBILITY as to the breakdown
			* and what exactly are the specials.
		 */                           
        Schema::create('opos_itemdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
			/* FK to opos_receiptproduct.id */
            $table->integer('receiptproduct_id')->unsigned();

			/* This stores all the calculated values in cents */
			/* amount+rounding = (price+SST) + discount + service_charge
			 */
			$table->integer('amount')->unsigned();
			$table->integer('rounding');

			/* These 4 values must add up to total_amount + rounding */
			$table->integer('price')->unsigned();
			$table->integer('sst')->unsigned();
			$table->integer('discount')->unsigned();
			$table->integer('service_charge')->unsigned();

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
        Schema::dropIfExists('opos_itemdetails');
    }
}
