<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposReceiptvoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_receiptvoucher', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_receipt.id
            $table->integer('receipt_id')->unsigned();
			// FK to voucherlist.id
			// We use voucherlist.systemid for redemption
			$table->integer('voucherlist_id')->unsigned();
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
        Schema::dropIfExists('opos_receiptvoucher');
    }
}
