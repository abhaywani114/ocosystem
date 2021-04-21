<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockreportmerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockreportmerchant', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to stockreport.id
			$table->integer('stockreport_id')->unsigned();
			// FK to merchant.id; this is for the FRANCHISEE!! Take Note!
			$table->integer('franchisee_merchant_id')->unsigned();
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
        Schema::dropIfExists('stockreportmerchant');
    }
}
