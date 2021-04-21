<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgFuelmovementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('og_fuelmovement', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to location.id
			$table->integer('location_id')->unsigned()->nullable();
			// FK to prd_ogfuel.id
			$table->integer('ogfuel_id')->unsigned()->nullable();
			// FK to merchant.id
			$table->integer('franchisee_merchant_id')->unsigned()->nullable();
			$table->datetime('date');
			$table->float('cforward')->nullable();
			$table->float('sales')->nullable();
			$table->float('receipt')->nullable();
			$table->float('book')->nullable();
			$table->float('tank_dip')->nullable();
			$table->float('daily_variance')->nullable();
			$table->float('cumulative')->nullable();
			$table->float('percentage')->nullable();
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
        Schema::dropIfExists('og_fuelmovement');
    }
}
