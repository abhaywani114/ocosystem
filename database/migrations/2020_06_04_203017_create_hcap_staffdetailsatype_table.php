<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcapStaffdetailsatypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcap_staffdetailsatype', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to hcap_staffdetails.id
			$table->integer('staffdetails_id')->unsigned();
			$table->string('allowance_type');
			// This is money in MYR. Stored in cents.
			$table->integer('amount')->default(0);
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
        Schema::dropIfExists('hcap_staffdetailsatype');
    }
}
