<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmrpartsUsedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmrparts_used', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to cmrform.id
			$table->integer('cmrform_id')->unsigned();
			// FK to prd_inventory.id, where we have
			// inventory.price and inventory.qty
			$table->integer('inventory_id')->unsigned()->nullable();
			$table->integer('cmr_qty')->unsigned()->nullable();
			$table->string('cmr_partno')->nullable();
			$table->boolean('cmr_chargeable')->default(false);
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
        Schema::dropIfExists('cmrparts_used');
    }
}
