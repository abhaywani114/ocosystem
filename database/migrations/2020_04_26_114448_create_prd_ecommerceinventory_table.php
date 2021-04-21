<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrdEcommerceinventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prd_ecommerceinventory', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to prd_ecommerce.id
			$table->integer('ec_id')->unsigned();
			// FK to prd_inventory.id
			$table->integer('inventory_id')->unsigned();
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
        Schema::dropIfExists('prd_ecommerceinventory');
    }
}
