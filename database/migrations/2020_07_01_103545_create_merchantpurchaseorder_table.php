<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantpurchaseorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchantpurchaseorder', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to merchant.id
			$table->integer('merchant_id')->unsigned();
			// FK to purchaseorder.id
			$table->integer('purchaseorder_id')->unsigned();
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
        Schema::dropIfExists('merchantpurchaseorder');
    }
}
