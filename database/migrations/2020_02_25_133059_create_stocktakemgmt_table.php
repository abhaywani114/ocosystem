<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocktakemgmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocktakemgmt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
			// FK to location.id
			$table->integer('location_id')->unsigned()->nullable();
			// The name of the StockTake event
			$table->string('stocktake_name')->nullable();
			// Selection of product type
			$table->enum('product',['inventory','rawmaterial'])->nullable();
			// The person who had created this record, FK to users.id
			$table->integer('creator')->unsigned()->nullable();
			// The status of the StockTake Event
			$table->enum('status',
				['pending','inprogress','completed'])->
				default('pending');

			/* The number of staff that are involved in this stocktake event
			 * is from stocktakemgmtuser which is 1:m */
			
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
        Schema::dropIfExists('stocktakemgmt');
    }
}
