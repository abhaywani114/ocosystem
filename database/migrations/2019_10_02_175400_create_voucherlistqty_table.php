<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherlistqtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucherlistqty', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to voucherlist.id
            $table->integer('voucherlist_id')->unsigned();
            $table->integer('quantity');
            $table->integer('location_id')->unsigned;
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
        Schema::dropIfExists('voucherlistqty');
    }
}
