<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationbarcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Barcodes are unique for a merchant_id. However the same barcode
		   are allow to occur in other merchant_id */
        Schema::create('locationbarcode', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to location.id
			$table->integer('location_id')->unsigned();
			// FK to merchantlocation.id
			$table->integer('merchantlocation_id')->unsigned();
			$table->string('name')->nullable();
			$table->string('barcode')->nullable();
			$table->string('barcode_type')->default('C128');;
			// Address is taken from location.address_line[1..3]
			$table->text('notes')->nullable();
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
        Schema::dropIfExists('locationbarcode');
    }
}
