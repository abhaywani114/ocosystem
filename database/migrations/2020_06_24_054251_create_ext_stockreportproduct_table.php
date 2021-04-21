<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtStockreportproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ext_stockreportproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ext_stockreport_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->string('barcode')->nullable();

            /* To be input by creator, needs to be signed */ 
            $table->float('quantity')->nullable();

            /* To be input by checker, for corrections */ 
            $table->float('correction')->nullable();

            /* To be input by checker */ 
            $table->float('received')->nullable();

            $table->enum('status',['checked','unchecked'])->
				default('unchecked');

            $table->integer('lost')->unsigned();
            $table->integer('damaged')->unsigned();

			$table->string('remark');
			$table->string('image');
            
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('ext_stockreportproduct');
    }
}
