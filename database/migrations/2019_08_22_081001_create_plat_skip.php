<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatSkip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_skip', function (Blueprint $table) {
            $table->bigIncrements('id');
            // FK to opos_rceipt.id
            $table->integer('receipt_id')->unsigned()->nullable();
            /* FK to opos_ftype.id for fnumber (table no.) */
            $table->integer('ftype_id')->unsigned();
            // FK to opos_terminal.id
            $table->integer('terminal_id')->unsigned();

            /* Mini transaction cache layer */
            $table->integer('item_total')->unsigned()->default(0);
            $table->integer('service_tax')->unsigned()->default(0);
            $table->integer('service_charge')->unsigned()->default(0);
            $table->integer('rounding')->default(0);
            $table->integer('total_amount')->unsigned()->default(0);

            $table->integer('pax')->unsigned()->default(0);
            $table->enum('status',array(
                'vacant','active','printed','voided','completed','paid'))->default('vacant');

			$table->string('remark');

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
        Schema::dropIfExists('plat_skip');
    }
}
