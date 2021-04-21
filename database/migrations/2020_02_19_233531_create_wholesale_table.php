<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWholesaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores the multi-tiered pricing for products which
		 * are only applicable to dealers.
		 * So, dealers are recorded in the merchantrelation table:
		 */
        Schema::create('wholesale', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('position')->unsigned();
			// FK to product.id
			$table->integer('product_id')->unsigned();

			/* E.g.:
			 *  20-49  units, $100
			 *  50-99  units, $80
			 * 100-149 units, $60
			 * funit=20,  unit=49,  price=100
			 * funit=50,  unit=99,  price=80
			 * funit=100, unit=149, price=60
			 */

			/* From this unit: */
            $table->integer('funit')->unsigned();
			/* To this unit */
            $table->integer('unit')->unsigned();
			/* Note price is stored in cents */
            $table->integer('price')->unsigned();

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
        Schema::dropIfExists('wholesale');
    }
}
