<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQ1defTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q1def', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
			$table->integer('product_id')->unsigned;
            $table->integer('measurement')->unsigned;
			// FK to uom.id
			$table->integer('uom_id')->unsigned;
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
        Schema::dropIfExists('q1def');
    }
}
