<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisemerchantlocprdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisemerchantlocprd', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to franchisemerchantloc.id
            $table->integer('franchisemerchantloc_id');
			// Product to be sold in this franchise location for this franchisee
			// FK to product.id
            $table->integer('product_id');
			// Royalty against EACH product sold in this franchise
			// This is in percentage (%)
            $table->float('prd_royalty');
			// Establish price range which a franchisee can sell
            $table->integer('upper_price')->unsigned();
            $table->integer('recommended_price')->unsigned();
            $table->integer('lower_price')->unsigned();
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
        Schema::dropIfExists('franchisemerchantlocprd');
    }
}
