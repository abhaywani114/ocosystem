<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArpaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arpayment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('systemid');
			// FK to bank.id
            $table->integer('bank_id')->unsigned();
            $table->enum('method', ['cash','cheque','internet_banking']);
            $table->text('note')->nullable();
            $table->integer('amount')->unsigned();
			// FK to users.id
            $table->integer('user_id')->unsigned();
            $table->date('date_paid');

			// *** VOID attributes ***
			$table->boolean('is_void')->default(false);
			// FK to users.id, to store who had voided this SO
			$table->integer('void_user_id')->unsigned()->nullable();
			$table->text('void_reason')->nullable();

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
        Schema::dropIfExists('arpayment');
    }
}
