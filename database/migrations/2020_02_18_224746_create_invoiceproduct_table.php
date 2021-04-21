<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoiceproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to invoice.id
			$table->integer('invoice_id')->unsigned();
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// Archival storage for product
			$table->string('product_name');
			$table->string('product_systemid');
			$table->string('product_thumbnail');
			$table->integer('price')->unsigned();
			$table->integer('quantity')->unsigned();
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
        Schema::dropIfExists('invoiceproduct');
    }
}
