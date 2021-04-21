<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOposTerminalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opos_terminal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
			$table->string("name");
			$table->string("description");
			$table->string("ip_addr");
			$table->string("hardware_addr");
			$table->string("asset_id");
			// This currency is selected at ScreenD of OPOSsum
			$table->string('currency')->default('MYR');

            // This is to store current active receipt template
			$table->enum('receipt_type',['neon','pump','pump_escpos',
				'serpae','serpae_escpos'])->
				default('pump_escpos');

            // This is to store current active kitchen template
			$table->enum('kitchen_type',['neon','serpae','serpae_escpos'])->
				default('serpae_escpos');

            // This is to store current active print mode
			$table->enum('print_mode',['fast','normal'])->default('normal');

            // This is to store current active printer format
			$table->enum('printer_format',['html','escpos'])->default('html');

			$table->integer('btype_id')->unsigned();
			$table->enum('otherpointmode',
				['north','south'])->default('south');
			$table->enum('mode',
				['inclusive','exclusive'])->default('exclusive');
			$table->enum('status', 
				['pending','active','suspended'])->default('active');
			$table->enum('taxtype', 
				['gst','sst','vat'])->default('sst');
			$table->float('tax_percent')->unsigned()->default(6);
			$table->string("counter");
			$table->integer('report_no')->unsigned();
			$table->integer('receipt_no')->unsigned();
			$table->integer('servicecharge')->unsigned()->default(0);
			$table->integer('logged_user_id')->unsigned()->nullable();
			$table->string("local_logo");
			$table->enum('address_preference',
				["branch",'company'])->default('company');
			$table->boolean('show_sst_no')->default(false);

			// Different types of terminal system: MiniStation, Local OPOSsum
			$table->enum('tsystem',
				["ministation",'lopossum'])->default(null);

			$table->timestamps();
			$table->softDeletes();
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
        Schema::dropIfExists('opos_terminal');
    }
}
