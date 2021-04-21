<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatDevprinterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_devprinter', function (Blueprint $table) {
            $table->bigIncrements('id');

 			/* Where this printer is logically connected to */
			// FK to plat_counter.id
            $table->integer('counter_id')->unsigned();

			/* Queue name */
            $table->string('print_queue')->nullable();

			/* IP Address for the devices */
            $table->string('ipaddr')->nullable();

			/* Optional Hardware (MAC) Address for the devices */
            $table->string('hwaddr')->nullable();

			/* If required, we can add printer specific attributes */

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
        Schema::dropIfExists('plat_devprinter');
    }
}
