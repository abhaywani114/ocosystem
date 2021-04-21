<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposLoyaltyproductredemptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_loyaltyproductredemption', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
            $table->integer('product_id')->unsigned();
			// The number of loyaltypts which can redeem this product 
            $table->integer('redemption_lpts')->unsigned();
			// Is this product active to be redeemed?
            $table->enum('status',['active','inactive'])->default('inactive');
			// Beyond this validity date, the product can't be redeemed anymore
            $table->datetime('validity')->nullable();
			// This is how long the loyalty points can be used before expiring
			// 1m = 1 month, 1y = 1 year, 2y = 2 years
            $table->enum('point_expiry_period',['1m','1y','2y'])->default('1y');
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
        Schema::dropIfExists('opos_loyaltyproductredemption');
    }
}
