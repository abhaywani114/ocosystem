<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rack', function (Blueprint $table) {
            $table->bigIncrements('id');

			/* Global ID for rack
				13. Rack
				Platform = 1
				Type = 13
				Sequence = rack_seq
				e.g. 113xxxxxxxxxx */
			$table->string('systemid');

			/* Sequential index for all the racks in a warehouse */
			$table->integer('rack_no')->unsigned();

			$table->integer('warehouse_id')->unsigned();
			$table->string('name');
			$table->string('description');

			/* A rack can be used for own products or external 
			 * companies products */
			$table->enum('type',['own','ext'])->default('own');

			/* Physical size of rack */
			$table->string('size');	

			/* OPTIONAL: For future use, potentially useful  */
			$table->integer('capacity'); 
			$table->string('remarks'); 
 

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
        Schema::dropIfExists('rack');
    }
}
