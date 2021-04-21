<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockreportproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockreportproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stockreport_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->string('barcode')->nullable();
			$table->string('bmatrixbarcodejson')->nullable();

            /* To be inputted by creator, needs to be signed */ 
            $table->float('quantity')->nullable();

            /* To be inputted by checker, for corrections */ 
            $table->float('correction')->nullable();

            /* To be inputted by checker */ 
            $table->float('received')->nullable();

            $table->enum('status',['checked','unchecked'])->default('unchecked');
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
        Schema::dropIfExists('stockreportproduct');
    }
}
