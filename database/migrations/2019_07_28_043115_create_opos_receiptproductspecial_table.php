<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposReceiptproductspecialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This secondary link table stores the specials which were bought
		 * with a product via the primary linktable of opos_receiptproduct
		 */
        Schema::create('opos_receiptproductspecial', function (Blueprint $table) {
            $table->bigIncrements('id');
			/* FK opos_receiptproduct.id */
            $table->integer('receiptproduct_id')->unsigned();
            /* FK prd_special.id */
            $table->integer('special_id')->unsigned();
            $table->integer('quantity')->unsigned();

			/* This is a local copy of the special record */
            $table->string('name'); // Name of special
            $table->integer('price')->unsigned();

			/* We don't carry this anymore. We use the parent product's
			 * fields for this as we are adding special into the parent's
			 * price.
            $table->integer('sst')->unsigned();
            $table->integer('service_charge')->unsigned();
            $table->integer('discount_pct')->unsigned()->default(0)->nullable();
            $table->integer('discount')->unsigned()->default(0)->nullable();
            $table->integer('rounding')->unsigned();
            $table->integer('total_amount')->unsigned();
			 */

            $table->enum('status',['active','deleted','pending']);

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
        Schema::dropIfExists('opos_receiptproductspecial');
    }
}
