<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner', function (Blueprint $table) {
            $table->bigIncrements('id');

			// When type=company,    entity_id = company.id
            // When type=individual, entity_id = individual.id
            $table->integer('entity_id')->unsigned();

			$table->enum('type',['company','individual'])->nullable();

			// Introducer type
			$table->enum('itype',
				['introducer','partner-digital','partner-insurance'])->
				nullable();

			// Can be either person's or company's name
			$table->string('name');

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
        Schema::dropIfExists('partner');
    }
}
