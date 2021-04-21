<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveryorder', function (Blueprint $table) {
            $table->bigIncrements('id');
			// select nextval('deliveryorder_seq')
            $table->string('systemid');
			// FK to users.id. Assigned deliveryman
            $table->integer('deliveryman_user_id')->unsigned();
			// FK to merchant.id. The issuer of the DO
            $table->integer('issuer_merchant_id')->unsigned();
			// FK to location.id. The issuer's warehouse
            $table->integer('issuer_location_id')->unsigned();
			// FK to merchant.id. The receiver of the DO
            $table->integer('receiver_merchant_id')->unsigned();
			// FK to location.id. The delivery destination,
			// typically receiver's warehouse
            $table->integer('receiver_location_id')->unsigned();
			// FK to users.id
            $table->integer('completed_by_user_id')->unsigned();
			$table->enum('status',[
				'pending','pickedup','inprogress','completed'
			]);
			$table->timestamp('completed_at')->nullable();
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
        Schema::dropIfExists('deliveryorder');
    }
}
