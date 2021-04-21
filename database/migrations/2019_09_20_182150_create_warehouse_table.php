<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse', function (Blueprint $table) {
            $table->bigIncrements('id');

			/* OPTIONAL: Identification */
 			$table->string('name')->nullable();
			$table->string('description')->nullable();

			/* Location of the warehouse */
			$table->integer('location_id')->unsigned();

			/* OPTIONAL: Address of this warehouse */
			$table->string('address')->nullable();

			/* OPTIONAL: Contact person */
			$table->string('contactname')->nullable();
			$table->string('designation')->nullable();
			$table->string('mobile_no')->nullable();
			$table->string('email')->nullable();
 
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
        Schema::dropIfExists('warehouse');
    }
}
