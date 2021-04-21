<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchise', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $a = new SystemID('franchise');
			$table->string('systemid');
			// Stores the owner of the franchise. FK to merchant.id
			$table->integer('owner_merchant_id')->unsigned();
			$table->string('name');
			$table->float('royalty')->unsigned();
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
        Schema::dropIfExists('franchise');
    }
}
