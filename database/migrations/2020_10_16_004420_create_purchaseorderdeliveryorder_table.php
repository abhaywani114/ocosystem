<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseorderdeliveryorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseorderdeliveryorder', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to purchaseorder.id
            $table->integer('purchaseorder_id')->unsigned();
			// FK to deliveryorder.id
            $table->integer('deliveryorder_id')->unsigned();
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
        Schema::dropIfExists('purchaseorderdeliveryorder');
    }
}
