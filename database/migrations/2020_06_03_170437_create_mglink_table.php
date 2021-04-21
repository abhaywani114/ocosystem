<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMglinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* MerchantGlobal LinkTable for SalesOrder */
        Schema::create('mglink_so', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salesorder_id'); //FK to SO record
            $table->string('so_headerlogo')->nullable();
            $table->text('so_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        });

		/* MerchantGlobal LinkTable for PurchaseOrder */
        Schema::create('mglink_po', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchaseorder_id'); //FK to PO record
            $table->string('po_headerlogo')->nullable();
            $table->text('po_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
			$table->string('delivery_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 

 		/* MerchantGlobal LinkTable for Invoice */
        Schema::create('mglink_inv', function (Blueprint $table) {
            $table->increments('id');
			// FK to invoice.id
            $table->integer('invoice_id')->unsigned(); //FK to Invoice record
            $table->string('inv_headerlogo')->nullable();
            $table->text('inv_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 
 
  		/* MerchantGlobal LinkTable for DeliveryOrder */
        Schema::create('mglink_do', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deliveryorder_id'); //FK to DO record
            $table->string('do_headerlogo')->nullable();
            $table->text('do_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 

   		/* MerchantGlobal LinkTable for DebitNote */
        Schema::create('mglink_dn', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('debitnote_id'); //FK to DN record
            $table->string('dn_headerlogo')->nullable();
            $table->text('dn_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 

		/* MerchantGlobal LinkTable for CreditNote */
        Schema::create('mglink_cn', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('creditnote_id'); //FK to CN record
            $table->string('cn_headerlogo')->nullable();
            $table->text('cn_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 

		/* MerchantGlobal LinkTable for ConsignmentNote */
        Schema::create('mglink_consign', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consignmentnote_id'); //FK to Consign record
            $table->string('consign_headerlogo')->nullable();
            $table->text('consign_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 

		/* MerchantGlobal LinkTable for Quotation */
        Schema::create('mglink_quo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quotation_id'); //FK to Quo record
            $table->string('quo_headerlogo')->nullable();
            $table->text('quo_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
            $table->softDeletes();
            $table->timestamps();
            $table->engine = "ARIA";
        }); 

		/* MerchantGlobal LinkTable for Receipt */
        Schema::create('mglink_rcp', function (Blueprint $table) {
            $table->increments('id');
			// FK to arpayment.id
            $table->integer('arpayment_id')->unsigned(); 
            $table->string('rcp_headerlogo')->nullable();
            $table->text('rcp_footer')->nullable();
			// FK to currency.id
			$table->integer('currency_id')->unsigned();
			// These fields are for archival
			$table->string('supplier_company_name');
			$table->string('supplier_business_reg_no');
			$table->string('supplier_address');
			$table->string('dealer_company_name');
			$table->string('dealer_business_reg_no');
			$table->string('dealer_address');
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
        Schema::drop('mglink_so');
        Schema::drop('mglink_po');
        Schema::drop('mglink_inv');
        Schema::drop('mglink_do');
        Schema::drop('mglink_dn');
        Schema::drop('mglink_cn');
        Schema::drop('mglink_quo');
        Schema::drop('mglink_rcp');
        Schema::drop('mglink_consign');
    }
}
