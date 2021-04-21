<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtRackproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ext_rackproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// FK to rack.id
            $table->integer('rack_id')->unsigned();
			// FK to company.id (to differentiate between the external
			// company's products)
            $table->integer('company_id')->unsigned();
            $table->integer('quantity')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->engine = 'ARIA'; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ext_rackproduct');
    }
}
