<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantmobmoduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchantmobmodule', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to merchant.id
			$table->integer('merchant_id')->unsigned();
			// FK to mobmodule.id
			$table->integer('mobmodule_id')->unsigned();
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
        Schema::dropIfExists('merchantmobmodule');
    }
}
