<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPtsRedemption extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_pts_redemption', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('systemid');
			// FK to users.id to record the staff to clicked
			// Counter Loyalty Product Redemption@Confirm
			$table->integer('staff_user_id')->unsigned();
			// FK to product.id
			$table->integer('product_id')->unsigned();
			// FK to location.id
			$table->integer('location_id')->unsigned();
			// FK to opos_member.id
			$table->integer('member_id')->unsigned();
			$table->integer('quantity')->unsigned();
			// Total points redeemed for this product by this member
			$table->integer('total_pts_redeemed')->unsigned();
			// Remarks for Product Ledger
			$table->text('remarks');
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
        Schema::dropIfExists('product_pts_redemption');
    }
}
