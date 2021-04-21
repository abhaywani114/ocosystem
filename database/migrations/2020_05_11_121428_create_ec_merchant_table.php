<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec_merchant', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to ec_order.id, linked to ec_receipt.id
			$table->integer('order_id')->unsigned();
			// FK to ec_user.id, for buyers
			$table->integer('user_id')->unsigned();
			// Amount will be stored in ec_order
			$table->enum('status',
				['pending','executed','dropped'])->
				default('pending');
			$table->boolean('execution')->default(false);
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
        Schema::dropIfExists('ec_merchant');
    }
}
