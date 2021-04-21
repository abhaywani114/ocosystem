<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposWastageremarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_wastageremarks', function (Blueprint $table) {
            $table->bigIncrements('id');
			// FK to opos_wastage.id
            $table->integer('wastage_id')->unsigned();
			// Capture the user who creates the remark. FK to users.id
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('opos_wastageremarks');
    }
}
