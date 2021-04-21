<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupholding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores the corporate shareholders of a company, their
		 * relationship and their % shareholdings */
        Schema::create('groupholding', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to grouplink.id
			$table->integer('grouplink')->unsigned();
			// FK to company.owner_user_id, the primary account holder of this
			// merchant account
			$table->integer('owner_user_id')->unsigned();
			// FK to company.owner_user_id, the owner_user_id of the
			// shareholder company
			$table->integer('shareholder_owner_user_id')->unsigned();
			// The relationship of the shareholder with us
			$table->enum('psa', [
				'parent','subsidiary','associate','no_relationship'
			]);
			$table->float('percent_shareholding')->unsigned();
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
        Schema::dropIfExists('groupholding');
    }
}
