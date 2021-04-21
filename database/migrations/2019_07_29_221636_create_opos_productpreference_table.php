<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposProductpreferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_productpreference', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to product.id
            $table->integer('product_id')->unsigned();
			// FK to opos_terminal.id
            $table->integer('terminal_id')->unsigned();
			// FK to merchant.id
            $table->integer('franchisee_merchant_id')->unsigned();
            /* Chars that can be localised for a product */
            $table->string('name')->nullable();
            $table->string('photo_1')->nullable();
            $table->string('thumb_photo')->nullable();
            $table->integer('local_price')->unsigned()->nullable();
            $table->boolean('price_keyin')->default(false);
            $table->enum('status',['hide','show'])->default('show');
			
			// Weight in specified units
            $table->integer('weight')->unsigned()->nullable();
			// Price per unit
            $table->integer('price_per_unit')->unsigned()->default(1);
			// Unit for weightage
            $table->string('unit')->nullable();
            
            $table->softDeletes();
            $table->engine = 'ARIA';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opos_productpreference');
    }
}
