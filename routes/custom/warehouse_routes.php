<?php
/* Custom Logistics Routes */
 
 Route::get('show-warehouse-cheras','WarehouseController@showWarehouseMain')->name('warehouse.ajax.warehousemain');
  
Route::get('show-deliveryman-ware-view','WarehouseController@showdeliveryManView')->name('warehouse.ajax.deliveryman');
Route::post('show-deliveryman-ware-table','WarehouseController@showdeliveryManTable')->name('warehouse.ajax.deliveryman.table');

Route::post('warehouse_add_rack','WarehouseController@addRack')->name('warehouse.add_rack');
Route::post('warehouse_remove_rack','WarehouseController@removeRack')->name('warehouse.remove_rack');
Route::post('warehouse_update_remark','WarehouseController@updateRemark')->name('warehouse.update_remark');
Route::post('warehouse_update_mlinkstatus','WarehouseController@updateMlinkStatus')->name('warehouse.update_mlinkstatus');
Route::post('warehouse_update_onewaystatus','WarehouseController@updateOnewayStatus')->name('warehouse.update_onewaystatus');
Route::post('warehouse_update_rack_no','WarehouseController@updateRackNo')->name('warehouse.update_rack_no');
Route::post('externalcompanies','WarehouseController@externalcompanies')->name('warehouse.externalcompanies');
Route::post('warehouse_rack_product_list','WarehouseController@rack_product_list')->name('warehouse.rack_product_list');
Route::post('warehouse_rack_product_ledger','WarehouseController@rack_product_ledger')->name('warehouse.rack_product_ledger');
Route::post('warehouse_update_rack_desc','WarehouseController@updateRackDesc')->name('warehouse.update_rack_desc');
Route::post('get_location_rack','WarehouseController@get_location_rack')->name('warehouse.get_location_rack');
Route::get('show-deliverycontrol-ware-view','WarehouseController@showdeliveryControlView')->name('warehouse.ajax.deliverycontrol');
Route::get('show-pickcontrol-ware-view','WarehouseController@showpickUpControlView')->name('warehouse.ajax.pickupcontrol');
Route::get('show-tallychart-ware-view','WarehouseController@showtallyChartView')->name('warehouse.ajax.tallychart');
Route::get('landing/warehousebarcode/{id}', 'WarehouseController@showWarehouseBarcode');
Route::get('warehousestockin/{location_id}', 'WarehouseController@showWarehouseStockIn');
Route::get('warehousestockout/{location_id}', 'WarehouseController@showWarehouseStockOut');
Route::any('get_external_product', 'WarehouseController@get_external_product')->name('warehouse.getexternalproduct');
Route::any('update_product_quantity_stockw', 'WarehouseController@updateProductQuantitystock')->name('warehouse.update_product_quantity_stock');
Route::any('wupdate_rack_product_quantity_stock', 'WarehouseController@updateRackProductQuantitystock')->name('warehouse.update_rack_product_quantity_stock');
Route::post('warehouse_select_rack', 'WarehouseController@selectRack')->name('warehouse.select_rack');
Route::post('/deliveryman/taskdetails', 'WarehouseController@deliverymanAssignedTask')->name('warehouse.deliveryman.taskDetail');
?>
 
