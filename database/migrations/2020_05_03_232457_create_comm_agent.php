<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommAgent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comm_agent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('business_reg_no')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile_no')->nullable();
			$table->enum('status',['pending','active','inactive'])->
				default('pending');
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
        Schema::dropIfExists('comm_agent');
    }
}
