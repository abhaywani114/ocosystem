<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryorderproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveryorderproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to deliveryorder.id
            $table->integer('deliveryorder_id')->unsigned();
			//------------------------------------------
			// FK to product.id
            $table->integer('product_id')->unsigned();
			/* These are for archive */
			$table->string('product_name');
			$table->string('product_systemid');
			$table->string('product_thumbnail');
			/* This stores the monetary value in cents in the DB */
			$table->integer('price')->unsigned();
			$table->integer('quantity')->unsigned();
			//------------------------------------------
            $table->string('remark');
			// This is check of the physical count of the qty
			$table->integer('checker')->unsigned();
            $table->enum('status',[
				'pending','partial','delivered','undelivered'
			]);
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
        Schema::dropIfExists('deliveryorderproduct');
    }
}
