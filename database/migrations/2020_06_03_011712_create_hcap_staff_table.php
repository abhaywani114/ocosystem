<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcapStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcap_staff', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');
			$table->integer('user_id')->unsigned();
			$table->string('name')->nullable();
			$table->string('nric')->nullable();
			$table->date('dateofbirth')->nullable();
			$table->string('address')->nullable();
			$table->string('mobile_no')->nullable();
			$table->string('email')->nullable();
			$table->string('remarks')->nullable();
			// Image file is stored in:
			// public/images/hcap_staff/{hcap_staff_id}/{photo_image_file}
			$table->string('photo_image_file')->nullable();
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
        Schema::dropIfExists('hcap_staff');
    }
}
