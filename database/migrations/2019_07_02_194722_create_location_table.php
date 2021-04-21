<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
			// Owner of the location
			$table->integer('user_id')->unsigned()->nullable();
			// Name of the location
            $table->string('branch')->nullable();
			$table->string('address_line1')->nullable();
			$table->string('address_line2')->nullable();
			$table->string('address_line3')->nullable();
            $table->boolean('warehouse')->default(false);
            $table->boolean('foodcourt')->default(false);

			// Definition of Operation Hour
			$table->time("start_work")->default('00:00:00');
			$table->time("close_work")->default('23:59:59');

			$table->string('name')->nullable();
			$table->string('company_name')->nullable();
			//$table->string('address_preference')->nullable();
			$table->string('code')->nullable();
			//$table->integer('takeaway_no')->unsigned()->nullable();
			$table->boolean('default_initial_location')->default(false);

			// Attributes for OPOSsum Screen E
			// This is the color code for the screen E table header
			$table->string('e_table_header_color')->nullable();
			// This is the color code for the screen E bottom panel
			$table->string('e_bottom_panel_color')->nullable();
			// This is the color code for the screen E right panel
			$table->string('e_right_panel_color')->nullable();
			// This is the image on the screen E right panel
			// Path: public/image/location/{location_id}/screen_e_image
			$table->string('e_right_panel_image_file')->nullable();

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
        Schema::dropIfExists('location');
    }
}
