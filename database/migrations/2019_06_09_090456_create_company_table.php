<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();;
			$table->string('business_reg_no')->nullable();;
            $table->string('systemid')->nullable();;

			// public/image/company/{company_id}/corporate_logo/logo_file.png
            $table->string('corporate_logo')->nullable();
			//FK to company.id, company:parent_company = 1:1
			$table->integer('parent_company_id')->unsigned()->nullable();
			$table->integer('owner_user_id')->unsigned()->nullable();;
			$table->string('gst_vat_sst')->nullable();;

			$table->string('group')->nullable();
			$table->enum('incorporated',['local','foreign'])->default('local');
			$table->enum('registered',['local','foreign'])->default('local');
			$table->integer('total_employee')->unsigned()->nullable();

			$table->date('year_established')->nullable();;

			// companyfinancialyear linktable

			$table->text('remarks')->nullable();;

			// FK to country.id, company:country = 1:1
            $table->integer('country_id')->unsigned()->nullable();
			// FK to currency.id, company:currency = 1:1
            $table->integer('currency_id')->unsigned()->nullable();
			// FK to industry.id, company:industry = 1:m
            $table->integer('industry_id')->unsigned()->nullable();
			// FK to offering.id (what products & services)
			// company:offering = 1:m
            $table->integer('offering_id')->unsigned()->nullable();
			// FK to category.id, company:category = 1:m
            $table->integer('category_id')->unsigned()->nullable();
			// Office Address 
			$table->string('office_address')->nullable();
			// Postal Address 
			$table->string('postal_address')->nullable();
			// Loyalty Programme: number of points for 1 MYR
            $table->integer('loyalty_pgm')->unsigned()->nullable();
			$table->enum('status',['pending','active','inactive'])->
				default('pending');

			//Stores the approved date from pending->active
			$table->timestamp('approved_at')->nullable();

			/* All the contacts for this company
			 * company:contact = m:n -> companycontact link table */

			$table->enum('type',['plc','pte','gov','edu'])->nullable();
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
        Schema::dropIfExists('company');
    }
}
