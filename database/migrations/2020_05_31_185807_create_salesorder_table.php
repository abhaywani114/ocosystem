<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesorder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
			// FK to users.id for the Staff of the Supplier
			$table->integer('creator_user_id')->unsigned();
			// FK to location.id for the warehouse location
			// where the goods are delivered from
			$table->integer('creator_location_id')->unsigned();
			// FK to users.id for the Dealer
			$table->integer('dealer_user_id')->unsigned();
			// FK to location.id for the warehouse location to deliver to
			$table->integer('deliver_to_location_id')->unsigned();

			// *** VOID attributes ***
			$table->boolean('is_void')->default(false);
			// FK to users.id, to store who had voided this SO
			$table->integer('void_user_id')->unsigned()->nullable();
			$table->text('void_reason')->nullable();

			$table->enum('status', [
				'active','pending','approved','rejected',
				'unpaid','partial','full','offset'])->default('active');
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
        Schema::dropIfExists('salesorder');
    }
}
