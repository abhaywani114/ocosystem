<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesorderdeliveryorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesorderdeliveryorder', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to salesorder.id
            $table->integer('salesorder_id')->unsigned();
			// FK to deliveryorder.id
            $table->integer('deliveryorder_id')->unsigned();
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
        Schema::dropIfExists('salesorderdeliveryorder');
    }
}
