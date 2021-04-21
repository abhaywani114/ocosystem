<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposWastageproductbarcode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_wastageproductbarcode', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_wastageproduct.id
			$table->integer('wastageproduct_id')->unsigned();
			$table->string('barcode')->nullable();
			$table->string('bmatrixbarcodejson')->nullable();
			$table->integer('barcode_quantity')->default(0);
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
        Schema::dropIfExists('opos_wastageproductbarcode');
    }
}
