<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatOpenbillproductspecialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_openbillproductspecial', function (Blueprint $table) {
            $table->bigIncrements('id');
             /* FK to plat_openbillproduct.id */
            $table->integer('openbillproduct_id')->unsigned();
            /*FK to prd_special.id */
            $table->integer('special_id')->unsigned();
            $table->integer('quantity')->default(1);
            $table->enum('status',['active','deleted','pending']);

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
        Schema::dropIfExists('plat_openbillproductspecial');
    }
}
