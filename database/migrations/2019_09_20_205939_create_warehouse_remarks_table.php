<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouseremarks', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to warehouse.id
            $table->integer('warehouse_id')->unsigned();
            $table->text('remarks')->nullable();
			// FK to users.id (user who wrote these remarks)
            $table->integer('user_id')->unsigned();

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
        Schema::dropIfExists('warehouseremarks');
    }
}
