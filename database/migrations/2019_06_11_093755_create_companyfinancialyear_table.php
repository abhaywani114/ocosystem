<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyfinancialyearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyfinancialyear', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('company_id')->unsigned();
			// Format is yyyymm01, then
			// end_financial_year = start_financial_year + 11 months
			$table->date('start_financial_year');
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
        Schema::dropIfExists('companyfinancialyear');
    }
}
