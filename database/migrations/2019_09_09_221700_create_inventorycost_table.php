<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorycostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventorycost', function (Blueprint $table) {
            $table->bigIncrements('id');

            /* seller of the product: FK to merchant.id */
            $table->integer('seller_merchant_id')->unsigned();

            /* buyer/dealer of the product: FK to merchant.id */
            $table->integer('buyer_merchant_id')->unsigned();

            $table->timestamp('doc_date');
            $table->string('doc_no')->unique();

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
        Schema::dropIfExists('inventorycost');
    }
}
