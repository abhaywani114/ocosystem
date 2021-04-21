<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchiseproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
            $table->integer('product_id')->unsigned();
			// FK to franchise.id
            $table->integer('franchise_id')->unsigned();
            $table->boolean('active')->default(false);
            $table->integer('upper_price')->unsigned();
            $table->integer('recommended_price')->unsigned();
            $table->integer('lower_price')->unsigned();
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
        Schema::dropIfExists('franchiseproduct');
    }
}
