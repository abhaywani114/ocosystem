<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationproductpriceTable extends Migration
{
    /**
     * Run the migrations.
     *
	 *
     * @return void
     */
    public function up()
    {
        Schema::create('locationproductprice', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to franchiseproduct.id
			$table->integer('franchiseproduct_id')->unsigned();
			// FK to merchant.id
			$table->integer('franchisee_merchant_id')->unsigned()->nullable();
			// FK to location.id
			$table->integer('location_id')->unsigned()->nullable();
			$table->integer('price')->unsigned()->nullable();
			$table->boolean('active')->unsigned()->default(false);
			$table->softDeletes();
            $table->timestamps();
            $table->engine  = "ARIA";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locationproductprice');
    }
}
