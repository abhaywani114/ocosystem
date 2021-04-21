<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposWastageproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_wastageproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_wastage.id
            $table->integer('wastage_id')->unsigned();
			// FK to product.id
            $table->integer('product_id')->unsigned();
			// FK to location.id
            $table->integer('location_id')->unsigned();
            $table->integer('wastage_qty');
            $table->integer('damage_qty');
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
        Schema::dropIfExists('opos_wastageproduct');
    }
}
