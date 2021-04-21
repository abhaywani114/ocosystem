<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
			$table->string('name')->nullable();
			$table->text('description')->nullable();
			// public/images/product/{product_id}/{photo_1}
			$table->string('photo_1')->nullable();
			// public/images/product/{product_id}/thumb/{thumbnail_1}
			$table->string('thumbnail_1')->nullable();
			$table->string('sku')->nullable();
            $table->enum('ptype',[
				'inventory','services','rawmaterial',
				'voucher','warranty','membership','drum',
				'customization','ecommerce','oilgas'
			])->default('inventory');

			// FK to prd_category.id
			$table->integer('prdcategory_id')->unsigned();
			// FK to prd_subcategory.id
			$table->integer('prdsubcategory_id')->unsigned();
			// FK to prdcategory.id
			$table->integer('prdprdcategory_id')->unsigned();

			$table->integer('brand_id')->unsigned();

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
        Schema::dropIfExists('product');
    }
}
