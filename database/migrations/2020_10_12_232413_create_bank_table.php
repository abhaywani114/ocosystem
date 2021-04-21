<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('code');
			$table->string('company_name');
			$table->string('logo');
			$table->string('status');
			$table->integer('address_id')->unsigned();
			$table->string('description');
			$table->char('routing_id',9);

			/* Website for eBanking, FK points to website table */
			$table->string('ebanking_website_id');
			/* Website for eBanking API, FK points to website table */
			$table->string('ebanking_api_website_id');

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
        Schema::dropIfExists('bank');
    }
}
