<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePjobcontractorprodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This stores the rawmaterials which are used by a contractor in
		 * a pjob. Raw materials are actually a type of product */
        Schema::create('pjobcontractorprod', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('pjobcontractor_id')->unsigned();
			// Raw materials are products with product.ptype='rawmaterial'
			$table->integer('product_id')->unsigned();
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
        Schema::dropIfExists('pjobcontractorprod');
    }
}
