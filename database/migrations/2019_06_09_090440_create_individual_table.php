<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name')->nullable();
			$table->string('company_name')->nullable();
			$table->string('address_line1')->nullable();
			$table->string('address_line2')->nullable();
			$table->string('address_line3')->nullable();
			$table->enum('type',['introducer','partner-insurance','partner-digital'])->nullable();
			$table->enum('status',['pending','active','inactive'])->default('pending');
			$table->string('mobile_no')->nullable();
			$table->string('email')->nullable();
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
        Schema::dropIfExists('individual');
    }
}
