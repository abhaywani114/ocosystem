<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposReceiptproductbarcode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_receiptproductbarcode', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('receiptproduct_id');
			$table->integer('productbarcodelocation_id')->nullable();
			$table->integer('productbmatrixbarcodelocation_id')->nullable();
			$table->integer('quantity');
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
        Schema::dropIfExists('opos_receiptproductbarcode');
    }
}
