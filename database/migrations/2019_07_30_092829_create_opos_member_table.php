<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores members, primarily used for loyaltypoints
		 * operation */
        Schema::create('opos_member', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');
			// This is FK to merchant.id (member belonging to)
			$table->integer('merchant_id')->unsigned();
			$table->string('name');
			$table->string('nric');
			$table->string('mobile');

			$table->enum('status', ['active','inactive'])->default('active');

			// Store loyalty points, pts
			$table->integer('loyaltypts')->unsigned();
			// Store membership points, mts
			$table->integer('membershipmts')->unsigned();

			// From which terminal was this member created
			// FK to opos_terminal.id
			$table->integer('terminal_id')->unsigned();
			// which location is this terminal from?
			// FK to location.id
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
        Schema::dropIfExists('opos_member');
    }
}
