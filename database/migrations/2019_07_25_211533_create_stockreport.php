<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockreport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockreport', function (Blueprint $table) {
            $table->bigIncrements('id');
			// $a = new SystemID('stockreport');
            $table->string('systemid');
			// User who created this stockreport
            $table->integer('creator_user_id')->unsigned();
			// User who received the Tracking Report
            $table->integer('receiver_user_id')->unsigned();

			// FK to stocktakemgmt.id; Only for Stock Take
			$table->integer('stocktakemgmt_id')->unsigned();

            $table->enum('status',[
                'pending','confirmed','in_progress','cancelled','received'
            ])->default('pending');

			// Transfer => Tracking Reports
            $table->enum('type', [
                'voided','transfer','stockin','stockout',
				'stocktake','cforward','refundcp','daily_variance'
            ]);

			/* These are obsolete columns: moved to stockreportproduct
            $table->integer('received')->unsigned()->nullable();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
			*/
			// FK to location.id; the originating/from location
            $table->integer('location_id')->unsigned();
			// FK to location.id; the destination location
            $table->integer('dest_location_id')->unsigned();
			// The timestamp which Receive is pressed
            $table->timestamp('received_tstamp');
            $table->softDeletes();
            $table->timestamps();
            $table->engine  = "ARIA";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockreport');
    }
}
