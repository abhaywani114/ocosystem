<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnewayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oneway', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to merchant.id, this is the "owner" of these oneway parties
            $table->integer('self_merchant_id');
            $table->string('company_name');
            $table->string('business_reg_no')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->enum('status',['pending','active','inactive'])->
				default('pending');
            $table->softDeletes();
            $table->timestamps();
            $table->engine="ARIA";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oneway');
    }
}
