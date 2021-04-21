<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisemerchantlocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisemerchantloc', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to franchisemerchant.id
			$table->integer('franchisemerchant_id')->unsigned();
			// FK to location.id, the locations of the franchisee
			$table->integer('location_id')->unsigned();
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
        Schema::dropIfExists('franchisemerchantloc');
    }
}
