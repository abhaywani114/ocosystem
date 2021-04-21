<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposPromoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_promo', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');
			$table->string('title')->nullable();
			$table->dateTime('valid_start_dt')->nullable();
			$table->dateTime('valid_end_dt')->nullable();
			// Promo price in cents
			$table->integer('price')->unsigned()->default(0);
            $table->string('thumb_photo');
			$table->enum('type',[
				'direct','franchise','consignment'
			])->default('direct');
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
        Schema::dropIfExists('opos_promo');
    }
}
