<?php
/* Custom Logistics Routes */

Route::get('show-logistics-view',
	'LogisticsController@showLogisticsView')->
	name('landing.ajax.logistics');

Route::get('show-deliverycontrol-view',
	'LogisticsController@showdeliveryControlView')->
	name('logistics.ajax.deliverycontrol');

Route::get('show-deliveryman-view',
	'LogisticsController@showdeliveryManView')->
	name('logistics.ajax.deliveryman');

Route::get('show-vehiclemanagement-view',
	'LogisticsController@showVehicleManagementView')->
	name('logistics.ajax.vehiclemanagement');

Route::get('show-formregion-view',
	'LogisticsController@showFormRegionView')->
	name('logistics.ajax.formregion');

Route::get('show-tallychart-view',
	'LogisticsController@showtallyChartView')->
	name('logistics.ajax.tallychart');

Route::get('show-tallybyproduct-view',
	'LogisticsController@showtallyByProductView')->
	name('logistics.ajax.tallybyproduct');

Route::get('show-pickcontrol-view',
	'LogisticsController@showpickUpControlView')->
	name('logistics.ajax.pickupcontrol');

Route::post('logistics-products',
	'LogisticsController@products')->
	name('logistics.product_list');

Route::post('logistics-products',
	'LogisticsController@po_products')->
	name('logistics.po_product_list');

Route::post("/centeraladmin/inventory/table", 
	"LogisticsController@cADataTable")->
	name("centeraladmin.table");

Route::post("/vehicle_management/inventory/table",
	"LogisticsController@vehicleManagementTable")->
	name("vehiclemanagement.table");

Route::post("/vehicle_management/inventory/addVehicle",
	"LogisticsController@vehicleManagementAddVehicle")->
	name("vehiclemanagement.addVehicle");

Route::post("/vehicle_management/inventory/updateVehicle",
	"LogisticsController@vehicleManagementUpdateVehicle")->
	name("vehiclemanagement.updateVehicle");

Route::post('/vehicle_management/inventory/update_deliveryman',
	"LogisticsController@updateDeliverymanCentralAdmin")->
	name('ca.deliveryman.update');
?>
