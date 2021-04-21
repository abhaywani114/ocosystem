<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
			// When type=company,    entity_id = company.id
			// When type=individual, entity_id = individual.id
            $table->integer('entity_id')->unsigned();

			// This should be a sequence
            $table->integer('quotation_no')->unsigned();

            $table->enum('type',['company','individual'])->nullable();

			$table->enum('client_banding',['1000-5000','5000-10000'])->nullable();
			$table->boolean('hongleong_account_holder')->default(false);

			// Which marketing campaign?
			$table->string('marketing_campaign')->nullable();

			// Which department/unit is involved for this client?
			$table->string('department')->nullable();
			// Which department has been involved in the past?
			$table->string('prev_department')->nullable();

			/* Which marketeer is involved for this client?
			 * staff:client = m:n -> staffclient link table */

			/* Which farmer is involved for this client?
			 * staff:client = m:n -> staffclient link table */

			/* Which introducers were involved?
			 * introducer:client = m:n -> introducerclient link table */

			/* Which introducer companies were involved?
			 * introducercompany:client = m:n ->
			 * introducercompanyclient link table */

 			/* What options are involved?
			 * circular, festival cards, product brochures, statements,
			 * premium warranty, renewal
			 * company:option = m:n -> companyoption link table */

			$table->enum('status', ['pending','active','inactive'])->
				default('pending');

			// FK to staff.id (staff who last audited the view)
			$table->integer('audit_staff_id')->unsigned()->nullable();
 
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
        Schema::dropIfExists('client');
    }
}
