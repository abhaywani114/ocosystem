<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposMembershipmtslogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_membershipmtslog', function (Blueprint $table) {
			$table->bigIncrements('id');
			// Membership Points = [17] (e.g.1170000000005)
			$table->string('systemid');

			// Staff who either sold or redeemed points for the member
			// FK to users.id
            $table->integer('staff_user_id')->unsigned();
			// Member either accumulating or consuming points
			// FK to opos_member.id
            $table->integer('member_id')->unsigned();
			// In=accumulating, Out=consuming
            $table->enum('type',['in','out']);
			// The current balance of his points
            $table->integer('mmts')->default(0);
			// Merchant where his points are originated from
			// FK to merchant.id
			$table->integer('source_merchant_id')->unsigned();
			// Merchant where his points are bought 
			// FK to merchant.id
			$table->integer('bought_merchant_id')->unsigned();
			// Merchant where his points have been consumed for a product
			// FK to merchant.id
			$table->integer('consumed_merchant_id')->unsigned();
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
        Schema::dropIfExists('opos_membershipmtslog');
    }
}
