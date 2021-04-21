<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsrpartsUsedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csrparts_used', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to csrform.id
			$table->integer('csrform_id')->unsigned();
			// FK to prd_inventory.id, where we have
			// inventory.price and inventory.qty
			$table->integer('inventory_id')->unsigned()->nullable();
			$table->integer('csr_qty')->unsigned()->nullable();
			$table->string('csr_partno')->nullable();
			$table->boolean('csr_chargeable')->default(false);
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
        Schema::dropIfExists('csrparts_used');
    }
}
