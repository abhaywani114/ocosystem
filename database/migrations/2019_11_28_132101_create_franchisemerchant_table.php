<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisemerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisemerchant', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to franchise.id
            $table->integer('franchise_id')->unsigned();
			// Stores the franchisee. FK to merchant.id
            $table->integer('franchisee_merchant_id')->unsigned();
			// This overall royalty is against total sales/revenue of the franchisee
			// It is in percentage (%)
            $table->float('overall_royalty')->unsigned();
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
        Schema::dropIfExists('franchisemerchant');
    }
}
