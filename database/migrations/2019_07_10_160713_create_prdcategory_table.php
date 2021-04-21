<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrdcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prdcategory', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('category_id')->unsigned();
			$table->integer('subcategory_id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('logo')->nullable();
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
        Schema::dropIfExists('prdcategory');
    }
}
