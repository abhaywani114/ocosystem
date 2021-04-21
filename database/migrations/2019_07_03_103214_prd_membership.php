<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrdMembership extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//     prd_membership
// • id
// • product_id integer unsigned (FK to product.id)
// • buy integer unsigned (money*)
// • get integer unsigned (money*)
 
    public function up()
    {
        //
        Schema::create('prd_membership', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('product_id')->unsigned();
            $table->integer('buy')->unsigned()->nullable();
            $table->integer('get')->unsigned()->nullable();            

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
        //
         Schema::dropIfExists('prd_membership');
    }
}
