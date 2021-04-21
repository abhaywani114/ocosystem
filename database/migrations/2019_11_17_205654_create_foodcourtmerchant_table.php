<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodcourtmerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodcourtmerchant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('foodcourt_id')->unsigned();
			// This stores the merchant_id of the tenant. FK to merchant.id
            $table->integer('tenant_merchant_id')->unsigned();
            $table->enum('status',['active','inactive'])->default('inactive');
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
        Schema::dropIfExists('foodcourtmerchant');
    }
}
