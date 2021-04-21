<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_discount', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("description");
            $table->integer("user_id")->unsigned();
            /* Discount value in percentage */
            $table->float("value")->unsigned()->default(0);

            $table->enum("type", ["staff","member","public"]);
            $table->enum("status", ["pending","active","suspended"])->
				default('active');

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
        Schema::dropIfExists('opos_discount');
    }
}
