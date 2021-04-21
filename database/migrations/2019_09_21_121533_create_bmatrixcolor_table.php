<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmatrixcolorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmatrixcolor', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to bmatrix.id
			$table->integer('bmatrix_id')->unsigned();
			// FK to color.id
			$table->integer('color_id')->unsigned();
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
        Schema::dropIfExists('bmatrixcolor');
    }
}
