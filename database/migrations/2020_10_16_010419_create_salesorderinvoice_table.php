<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesorderinvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesorderinvoice', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to salesorder.id
			$table->integer('salesorder_id')->unsigned();
			// FK to invoice.id
			$table->integer('invoice_id')->unsigned();
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
        Schema::dropIfExists('salesorderinvoice');
    }
}
