<?php
// Custom Landing Routes */
use \App\Models\usersrole;
use \App\Models\role;
use \Illuminate\Support\Facades\Auth;
use \App\Classes\UserData;


Route::get('/landing', function () {
	$id = Auth::user()->id;
	$user_data = new UserData();
	$user_data->exit_merchant();

	$user_roles = usersrole::where('user_id',$id)->get();

	$is_king =  \App\Models\Company::where('owner_user_id',Auth::user()->id)->first();

	if ($is_king != null) {
		$is_king = true;	
	} else {
		$is_king  = false;
	}

	if (!$user_data->company_id()) {
		abort(404);
	}

    return view('landing.landing',compact('user_roles','is_king'));})->
	middleware('auth')->
	middleware('CheckRole:onlyuser');

Route::get('show-user-view', 'HomeController@showUserView')->
	name('landing.ajax.user')->
	middleware('CheckRole:onlyuser');//->middleware('CheckRole:user');

Route::get('show-client-view', 'HomeController@showClientView')->
	name('landing.ajax.client')->
	middleware('CheckRole:clt')->
	middleware('CheckRole:onlyuser');

Route::get('show-individual-view', 'HomeController@showIndividualView')->
	name('landing.ajax.individual')->
	middleware('CheckRole:partner')->
	middleware('CheckRole:onlyuser');

Route::get('show-company-view', 'HomeController@showCompanyView')->
	name('landing.ajax.company')->
	middleware('CheckRole:onlyuser');

Route::get('show-crm-view', 'HomeController@showCRMView')->
	name('landing.ajax.crm')->
	middleware('CheckRole:onlyuser');

Route::get('show-product-view', 'HomeController@showProductView')->
	name('landing.ajax.product')->
	middleware('CheckRole:onlyuser');

Route::get('show-location-view', 'HomeController@showLocationView')->
	name('landing.ajax.location')->
	middleware('CheckRole:onlyuser');
 
Route::get('show-logistics-view', 'HomeController@showLogisticsView')->
	name('landing.ajax.logistics')->
	middleware('CheckRole:onlyuser');

Route::get('show-data-view', 'HomeController@showDataManagementView')->
	name('landing.ajax.data')->
	middleware('CheckRole:onlyuser');

Route::get('show-vcmanual-view', 'HomeController@showVCManualView')->
	name('landing.ajax.vcmanual')->
	middleware('CheckRole:onlyuser');

Route::get('show-ageing-view', 'AgeingController@ShowAgeingView')->
	name('landing.ajax.ageing')->
	middleware('CheckRole:onlyuser');

Route::get('show-cash-view', 'HomeController@showCashView')->
	name('landing.ajax.cash')->
	middleware('CheckRole:onlyuser');

Route::get('show-stocklevel-view', 'AnalyticsController@showStockProductSalesQtyView')->
		//'HomeController@showStockLevelView')->
	name('landing.ajax.stocklevel')->
	middleware('CheckRole:onlyuser');

Route::get('show-credit-view', 'HomeController@showCreditView')->
	name('landing.ajax.credit')->
	middleware('CheckRole:onlyuser');

Route::get('show-operatorview-view', 'HomeController@showOperatorView')->
	name('landing.ajax.operatorview')->
	middleware('CheckRole:onlyuser');

Route::get('show-comopanyreport-view', 'HomeController@showCompanyReportView')->
	name('landing.ajax.company_report')->
	middleware('CheckRole:onlyuser');
	
Route::get('show-oilgas-view', 'HomeController@showOilGasView')->
	name('landing.ajax.oilgas')->
	middleware('CheckRole:onlyuser');

Route::get('industry/show-fuel_price-view', 'HomeController@FuelPrice')->
	name('landing.ajax.warehouse')->
	middleware('CheckRole:onlyuser');

Route::get('industry/show-tank_Monitoring-view', 'HomeController@showTankMonitoring')->
	name('landing.ajax.warehouse')->
	middleware('CheckRole:onlyuser');

Route::get('industry/show-tank_Mangement-view', 'HomeController@showTankManagement')->
	name('landing.ajax.warehouse')->
	middleware('CheckRole:onlyuser');
	
Route::get('industry/show-tank_Mangement-view-franchise', 'HomeController@showTankManagement')->
	name('landing.ajax.warehouse.tank.fr')->
	middleware('CheckRole:onlyuser');

Route::get('show-warehouse-view', 'HomeController@showWarehouseView')->
	name('landing.ajax.warehouse')->
	middleware('CheckRole:onlyuser');


Route::get('warehouse-allocated-product/{company_id}',
	'HomeController@showWarehouseallocatedproductView')->
	name('landing.ajax.warehouse-allocated-product')->
	middleware('CheckRole:onlyuser');

Route::get('warehouse-qty-product/{company_id}',
	'HomeController@showWarehouseqtyproductView')->
	name('landing.ajax.warehouse-qty-product')->
	middleware('CheckRole:onlyuser');

Route::get('videomonster', 'HomeController@showVideoMonster')->
	name('landing.ajax.vidmonster')->
	middleware('CheckRole:onlyuser');

Route::get('mob_landing', 'MobileController@index')->
	name('mob_landing')->
	middleware('CheckRole:onlyuser');

Route::post('/update_supplier_status','HomeController@updateSupplierStatus')->
	name('update.supplier.status')->
	middleware('CheckRole:onlyuser');

Route::post('/update_dealer_status','HomeController@updateDealerStatus')->
	name('update.dealer.status')->
	middleware('CheckRole:onlyuser');
	
Route::post('/add_new_dealer','HomeController@addNewDealer')->
	name('add.new.dealer')->
	middleware('CheckRole:onlyuser');
?>
