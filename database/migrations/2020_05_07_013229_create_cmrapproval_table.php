<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmrapprovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This table stores an approval event. For a complete approval cycle,
		 * we should have 6 records per a cmrform_id */
        Schema::create('cmrapproval', function (Blueprint $table) {
            $table->bigIncrements('id');

			// FK to cmrform.id
			$table->integer('cmrform_id')->unsigned();

			// Processing steps to find out which step and which approval step:
			// 1. remove 1st character for step no.
			// 2. replace underscore with a space
			// 3. run ucwords()
			$table->enum('approval_name',[
				'1customer_service','2store','3maintenance_dept', 
				'4customer','5maintenance_dept','6finance_dept'])->
				default('1customer_service');

			// FK to users.id. Capture the person who approves
			$table->integer('approver_user_id')->unsigned();

			// Display staff.systemid via staff.user_id = approval_user_id
			// Display user.name via users.id = approval_user_id
			// Display time of approval via created_at

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
        Schema::dropIfExists('cmrapproval');
    }
}
