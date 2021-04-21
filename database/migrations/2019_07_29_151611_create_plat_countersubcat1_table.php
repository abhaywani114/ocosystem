<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatCountersubcat1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This is to implement counter:subcat_level_1 = 1:m relationship */
        Schema::create('plat_countersubcat1', function (Blueprint $table) {
            $table->bigIncrements('id');
			/* This is FK to plat_counter.id */
            $table->integer('counter_id')->unsigned();

			/* This is FK to subcat_level_1.id */
            $table->integer('subcat1_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });

		/* This is to implement counter:subcat_level_2 = 1:m relationship */
        Schema::create('plat_countersubcat2', function (Blueprint $table) {
            $table->bigIncrements('id');
			/* This is FK to plat_counter.id */
            $table->integer('counter_id')->unsigned();

			/* This is FK to subcat_level_2.id */
            $table->integer('subcat2_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 

		/* This is to implement counter:subcat_level_3 = 1:m relationship */
        Schema::create('plat_countersubcat3', function (Blueprint $table) {
            $table->bigIncrements('id');
			/* This is FK to plat_counter.id */
            $table->integer('counter_id')->unsigned();

			/* This is FK to subcat_level_3.id */
            $table->integer('subcat3_id')->unsigned();
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
        Schema::dropIfExists('plat_countersubcat1');
        Schema::dropIfExists('plat_countersubcat2');
        Schema::dropIfExists('plat_countersubcat3');
    }
}
