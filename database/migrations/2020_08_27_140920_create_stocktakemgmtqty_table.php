<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocktakemgmtqtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocktakemgmtqty', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to stocktakemgmt.id
			$table->integer('stocktakemgmt_id')->unsigned();
			// FK to product.id
			$table->integer('product_id')->unsigned();
			$table->integer('quantity')->nullable();
			$table->integer('multichecker')->nullable();
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
        Schema::dropIfExists('stocktakemgmtqty');
    }
}
