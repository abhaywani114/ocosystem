<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantlink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchantlink', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('initiator_user_id')->unsigned();
			$table->integer('responder_user_id')->unsigned();
			$table->enum('status',
				['active','inactive'])->default('active');
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
        Schema::dropIfExists('merchantlink');
    }
}
