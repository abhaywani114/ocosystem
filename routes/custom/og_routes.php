<?php
Route::get('/industry/cadmin', 'IndustryOilGasController@cadmin_og')->name('og_cadmin');
Route::post('/industry/cadmin/dtable', 'IndustryOilGasController@cadmin_og_dtable')->name('og_cadmin.dtable');
Route::get('/industry/cadmin/vehicle', 'IndustryOilGasController@vehicle_og')->name('og_cadmin.vhe');

Route::get('/industry/cadmin/vehicle_mng', 'IndustryOilGasController@vehicle_mgmt_og')->name('og_cadmin.bhe_mgmt');
Route::get('/industry/cadmin/deliveryman', 'IndustryOilGasController@og_deliveryman')->name('og_cadmin.deliveryman_crt');
Route::post('/industry/cadmin/deliveryman/table', 'IndustryOilGasController@og_deliverymantable')->name('og_cadmin.deliveryman_table');

Route::post('/industry/cadmin/vehicle_mgmt_og/new','ogVehicleController@og_newVehicle' )->name('vehicle.new');
Route::post('/industry/cadmin/vehicle_mgmt_og/table','ogVehicleController@og_vehicleMgmt_tableData' )->name('vehicle.table');
Route::post('/industry/cadmin/vehicle_mgmt_og/select_deliveryman','ogVehicleController@selectDeliveryman' )->name('vehicle.selectDeliveryman');
Route::post('/industry/cadmin/vehicle_mgmt_og/delete_deliveryman','ogVehicleController@delete_delivaryman' )->name('vehicle.deleteDeliveryman');
Route::post('get-deliveryman-list','ogVehicleController@get_deliveryman_dialog')->name('deliveryman.getList');
Route::post('/industry/cadmin/vehicle_mgmt_og/update_numberplate','ogVehicleController@updateNumberPlate')->name('vehicle.updateNumberPlate');
?>
