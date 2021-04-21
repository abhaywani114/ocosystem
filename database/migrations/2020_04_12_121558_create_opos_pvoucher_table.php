<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposPvoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_pvoucher', function (Blueprint $table) {
            $table->bigIncrements('id');
			// This is FK to opos_receipt.id
			$table->integer('receipt_id')->unsigned();
			// This is FK to users.id
			$table->integer('staff_user_id')->unsigned();
			$table->string('doc_no');
			$table->enum('platform',[
				'lazada','shopee','taobao','aliexpress']);
			$table->string('description');

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
        Schema::dropIfExists('opos_pvoucher');
    }
}
