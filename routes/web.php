<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
include_once('custom/localaccess_routes.php');
include_once('custom/api_fc_routes.php');
include_once('custom/counter_routes.php');
include_once('custom/productsetting_routes.php');
include_once('custom/merchant_routes.php');
include_once('custom/terminal_routes.php');
include_once('custom/superadmin_routes.php');
include_once('custom/user_routes.php');
include_once('custom/landing_routes.php');
include_once('custom/consignment_routes.php');
include_once('custom/procured_routes.php');
include_once('custom/quotation_routes.php');
include_once('custom/user_routes.php');
include_once('custom/individual_routes.php');
include_once('custom/client_routes.php');
include_once('custom/crm_routes.php');
include_once('custom/company_routes.php');
include_once('custom/financialyear_routes.php');
include_once('custom/target_routes.php');
include_once('custom/campaign_routes.php');
include_once('custom/settings_routes.php');
include_once('custom/analytics_routes.php');
include_once('custom/product_routes.php');
include_once('custom/data_routes.php');
include_once('custom/logistics_routes.php');
include_once('custom/production_routes.php');
include_once('custom/membership_routes.php');
include_once('custom/warranty_routes.php');
include_once('custom/voucher_routes.php');
include_once('custom/inventory_routes.php');
include_once('custom/opossum_routes.php');
include_once('custom/retail_voucher_routes.php');
include_once('custom/svc_warranty_routes.php');
include_once('custom/rawmaterial_routes.php');
include_once('custom/restaurant_routes.php');
include_once('custom/location_routes.php');
include_once('custom/production_rawmaterial_routes.php');
include_once('custom/production_trigger_routes.php');
include_once('custom/virtualcabinet_routes.php');
include_once('custom/alliance_routes.php');
include_once('custom/superadmin_routes.php');
include_once('custom/signup_routes.php');
include_once('custom/deliveryorder_routes.php');
include_once('custom/pigeon_routes.php');
include_once('custom/report_routes.php');
include_once('custom/deliveryorder_routes.php');
include_once('custom/debitnote_routes.php');
include_once('custom/creditnote_routes.php');
include_once('custom/invoice_routes.php');
include_once('custom/purchaseorder_routes.php');
include_once('custom/salesorder_routes.php');
include_once('custom/ageing_routes.php');
include_once('custom/customization_routes.php');
include_once('custom/drumbarrel_routes.php');
include_once('custom/receipt_routes.php');
include_once('custom/wastage_routes.php');
include_once('custom/pickinglist_routes.php');
include_once('custom/repair_routes.php');
include_once('custom/tts_routes.php');
include_once('custom/prdspecial_routes.php');
include_once('custom/oposcomponent_routes.php');
include_once('custom/retailmembership_routes.php');
include_once('custom/consignmentlocation_routes.php');
include_once('custom/centraladmin_routes.php');
include_once('custom/receiptrefund_routes.php');
include_once('custom/oposstock_routes.php');
include_once('custom/receipt_routes.php');
include_once('custom/hcapscheduler_routes.php');
include_once('custom/hcapattendance_routes.php');
include_once('custom/hcapstaff_routes.php');
include_once('custom/pickinglist_routes.php');
include_once('custom/wastage_routes.php');
include_once('custom/oposscreen_e_routes.php');
include_once('custom/oposscreen_f_routes.php');
include_once('custom/consolidatedreport_routes.php');
include_once('custom/companyreport_routes.php');
include_once('custom/crptdisclosure_routes.php');
include_once('custom/crptdepreciation_routes.php');
include_once('custom/crptinterestincome_routes.php');
include_once('custom/crptfinancecosts_routes.php');
include_once('custom/crptdividendincome_routes.php');
include_once('custom/crptotherincome_routes.php');
include_once('custom/crptotherexpenses_routes.php');
include_once('custom/crpttaxation_routes.php');
include_once('custom/crpttaxcharge1_routes.php');
include_once('custom/crpttaxcharge2_routes.php');
include_once('custom/crptbioassets_routes.php');
include_once('custom/crptdisposablegrncasale_routes.php');
include_once('custom/crptdisposablegroupliabilities_routes.php');
include_once('custom/crptcashbankbalances_routes.php');
include_once('custom/crpttradepayables_routes.php');
include_once('custom/crpthplease_routes.php');
include_once('custom/crptbondsloan_routes.php');
include_once('custom/crptdisposablesubsidiary_routes.php');
include_once('custom/crptbusinesscombination_routes.php');
include_once('custom/crptinterestcapitalized_routes.php');
include_once('custom/crptsaleofnoncurrent_routes.php');
include_once('custom/crptpropertyplant_routes.php');
include_once('custom/crptinvestmentproperty_routes.php');
include_once('custom/crptlandhelddev_routes.php');
include_once('custom/crptinvestsubscompanies_routes.php');
include_once('custom/crptinvestassocompanies_routes.php');
include_once('custom/crptassetspledged_routes.php');
include_once('custom/crptbusinesscombination_routes.php');
include_once('custom/crptcontingentliabilities_routes.php');
include_once('custom/crptcapitalcommitments_routes.php');

include_once('custom/crptfinancialinstruments_routes.php');
include_once('custom/crptlistofinvestments_routes.php');

include_once('custom/crptlistofinvestments_routes.php');
include_once('custom/crptlistofasso_routes.php');
include_once('custom/crptlistofotherlongterm_routes.php');

include_once('custom/crptassetspledged_routes.php');
include_once('custom/crptbusinesscombination_routes.php');
include_once('custom/crptcontingentliabilities_routes.php');
include_once('custom/crptcapitalcommitments_routes.php');
include_once('custom/crptretirementbenefit_routes.php');
include_once('custom/crpttreasurystock_routes.php');
include_once('custom/crptsegmentresultsbiztype_routes.php');
include_once('custom/crptdividendpayable_routes.php');
include_once('custom/crptimpairmentdisclosuresegment_routes.php');
include_once('custom/crptprovisions_routes.php');

include_once('custom/crptsegmentinformationbiztype_routes.php');
include_once('custom/crptsegmentreportbylocation_routes.php');

include_once('custom/crptsegmentinformationbiztype_routes.php');
include_once('custom/crptsegmentreportbylocation_routes.php');

include_once('custom/crptshortterminvest_routes.php');
include_once('custom/crptconstructioncontract_routes.php');
include_once('custom/crptdepositsfinancialinstitutions_routes.php');
include_once('custom/crptdevelopmentproperty_routes.php');
include_once('custom/crptgoodwill_routes.php');
include_once('custom/crptintangibleassets_routes.php');
include_once('custom/crptinventories_routes.php');
include_once('custom/crptlanduserights_routes.php');
include_once('custom/crpttradereceivables_routes.php');
include_once('custom/crptotherlongterminvest_routes.php');

include_once('custom/crptsalesrevenue_routes.php');
include_once('custom/crptcostofsale_routes.php');

include_once('custom/crptdividendexpense_routes.php');
include_once('custom/crptrentalincome_routes.php');
include_once('custom/crptrentalexpense_routes.php');
include_once('custom/crptmgmtsvcsincome_routes.php');
include_once('custom/crptmgmtsvcsexpense_routes.php');
include_once('custom/crptadminfeeincome_routes.php');
include_once('custom/crptadminfeeexpense_routes.php');
include_once('custom/crptamountowingrelated1_routes.php');
include_once('custom/crptamountowingrelated2_routes.php');
include_once('custom/crptdividendreceived_routes.php');
include_once('custom/crptloanfromrelatedcompany_routes.php');
include_once('custom/crptrepaymentfromrelatedcompany_routes.php');
include_once('custom/crptloantorelatedcompany_routes.php');
include_once('custom/crptrepaymenttorelatedcompany_routes.php');

include_once('custom/crptdiscontinued_routes.php');
include_once('custom/crptkeymanager_routes.php');

include_once('custom/crptfrs7fairvaluehierarchy_routes.php');
include_once('custom/crptrealisedunrealisedprofitloss_routes.php');
include_once('custom/crptinvestmentjvcjce_routes.php');
include_once('custom/crptlistofjvcjce_routes.php');
include_once('custom/crptfrs7sensitivityanalysis_routes.php');

include_once('custom/crpt_statement_of_comprehensive_income_routes.php');
include_once('custom/crpt_statement_of_financial_position_routes.php');
include_once('custom/crpt_statement_of_cash_flow_routes.php');
include_once('custom/crpt_statement_of_changes_in_equity_routes.php');

include_once('custom/crptbankborrowings_routes.php');
include_once('custom/crptstaffcost_routes.php');
include_once('custom/crptdirremuneration_routes.php');
include_once('custom/crptdeferredincome_routes.php');
include_once('custom/crptdeferredtax_routes.php');
include_once('custom/crptborrowingcost_routes.php');
include_once('custom/crpttaxrecoverable_routes.php');
include_once('custom/crptblockdiscounting_routes.php');
include_once('custom/crptborrowingsbycurrency_routes.php');

include_once('custom/crptlistofjvcjce_routes.php');
include_once('custom/crptfrs7assests_routes.php');
include_once('custom/crptfrs7disclosure_routes.php');

include_once('custom/ecommerce_routes.php');
include_once('custom/warehouse_routes.php');

include_once('custom/promo_routes.php');
include_once('custom/refund_routes.php');

include_once('custom/loyalty_routes.php');

include_once('custom/oposmember_routes.php');

/* For Mobile PlatyPOS */
include_once('custom/platypos_routes.php');

/* For Mobile Ocosystem */
include_once('custom/mob_user_routes.php');
include_once('custom/mob_transactions_routes.php');
include_once('custom/mob_scanner_routes.php');
include_once('custom/mob_platorder_routes.php');
include_once('custom/mob_analytics_routes.php');
include_once('custom/mob_repairmaintenance_routes.php');
include_once('custom/mob_virtualcabinet_routes.php');
include_once('custom/mob_module_assignment.php');

/* For internal setup and testing only */
include_once('custom/test_routes.php');
include_once('custom/script_routes.php');

/* For PetrolStation forecourt controller PTS2 API */
include_once('custom/opos_petrol_station_pump_routes.php');
include_once('custom/oposcalibration_routes.php');

/* Industry specific support */
include_once('custom/ind_oil_gas.php');
include_once('custom/og_fuelmovement_routes.php');

include_once('custom/oposskip_routes.php');
include_once('custom/forecourt_routes.php');
include_once('custom/atg_routes.php');

include_once('custom/oganalytics_routes.php');
include_once('custom/trackingreport_routes.php');
include_once('custom/stocktake_routes.php');
include_once('custom/opospvoucher_routes.php');

include_once('custom/industryecommerce_routes.php');

/* Service related forms */
include_once('custom/cmr_routes.php');
include_once('custom/csr_routes.php');
include_once('custom/mpcr_routes.php');

include_once('custom/grouprelationship_routes.php');
include_once('custom/commission_routes.php');

include_once('custom/asset_routes.php');
include_once('custom/projmgmt_routes.php');

include_once('custom/cpcr_routes.php');

include_once('custom/mob_module_assignment.php');

include_once('custom/barcode_matrix.php');
include_once('custom/og_routes.php');
include_once('custom/mall_routes.php');

//include_once('custom/cloudsync_routes.php');

include_once('custom/apifranchise_routes.php');
include_once('custom/eod_routes.php');
include_once('custom/external_routes.php');

Route::get('/', function () {
	if(Auth::user()) {
		if (Auth::user()->type == 'admin') {
			return redirect(route('landing.ajax.superadmin'));
		} else {
			return redirect('/landing');
		}
	}
	$agent = new Agent();
	Log::debug('agent='.json_encode($agent));

	if($agent->isMobile()) {
		return view('login.mob_login');

	} else {
		Log::debug('NOT MOBILE!');
		return view('login.login');
	}
});


Auth::routes(['register' => false]);

Route::get('/test',function(){

});
