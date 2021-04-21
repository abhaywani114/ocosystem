<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('default_location_id')->unsigned()->nullable();
            $table->integer('supplier_default_location_id')->
				unsigned()->nullable();
            $table->integer('dealer_default_location_id')->
				unsigned()->nullable();
			// FK to company.id
            $table->integer('company_id')->unsigned();
			$table->enum('status', ['pending','active','inactive'])->
				default('pending');
			// Term & Condition for product redemption
			$table->text('term_condition')->nullable();
			// SLA definition for CMR and CSR forms
            $table->tinyint('cmr_sla')->unsigned();
            $table->tinyint('csr_sla')->unsigned();
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
        Schema::dropIfExists('merchant');
    }
}
