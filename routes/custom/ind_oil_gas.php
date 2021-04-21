<?php
/* Oil & Gas Industry specific routes */
Route::resource('industryoilgas', 'IndustryOilGasController');

Route::post('industryoilgas-update-loyalty-point', 'IndustryOilGasController@updateLoyalty')->name('industryoilgas-update-loyalty-point');

Route::get('industry/oil-gas', 'IndustryOilGasController@showIndustryView')->name('get_industry_oil_gas_index_view')->middleware('CheckRole:onlyuser');


Route::get('industryoilgas-store', 'IndustryOilGasController@store')->
name('industryoilgas.store');

Route::get('industry/fuel-management', 'IndustryOilGasController@showFuelManagement')->name('Fuel-Management');

Route::post('industry/fuel-management/dipping-modal', 'IndustryOilGasController@showDippingModel')->name('Fuel-Management.nodal');

Route::post('industry/fuel-management-tables', 'IndustryOilGasController@showFuelManagement_tables')->name('FuelManagement_table');

Route::get('industryoilgas-store-fuel-all-details', 'IndustryOilGasController@storeFuel')->name('industryoilgas.storeFuel');
Route::get('industryoilgas-store-fuel-movement-all-details', 'IndustryOilGasController@storeFuelMovement')->name('industryoilgas.storeFuelMovement');
Route::get('industryoilgas-check-fuel-movement-all-details', 'IndustryOilGasController@checkFuelMovement')->name('industryoilgas.checkFuelMovement');

Route::get('industry/og_product', 'IndustryOilGasController@showOgProduct')->name('Og_Product');

Route::get('industry/og_product/retail', 'IndustryOilGasController@showOgProductRetail')->name('Og_Product.retail');
Route::get('industry/og_product/wholesale', 'IndustryOilGasController@showOgProductWholesale')->name('Og_Product.wholesale');
Route::post('industry/og_product/wholesale/update', 'IndustryOilGasController@fuelWholesalePriceUpdate')->name('Og_Product.wholesale.update');

Route::post('show-industryoilgas-edit-modal', 'IndustryOilGasController@showEditModal')->name('industryoilgas.edit.modal');

Route::any('industry_oilgas_update_product_quantity_stock', 'IndustryOilGasController@updateProductQuantitystock')->name('industry.update_product_quantity_stock')->middleware('CheckRole:onlyuser');

Route::post('show-industry-oil-gas-edit-modal', 'IndustryOilGasController@showEditModal')
->name('industryoilgas.edit.modal');

Route::get('oil-and-gas-products/{t_id?}', 'IndustryOilGasController@showOgFuelProducts')->name('industryoilgas.ajax.showOgFuelProducts');
Route::get('industryoilgas-store-fuel-all-details', 'IndustryOilGasController@storeFuel')->name('industryoilgas.storeFuel');
Route::get('oil-and-gas-qualified-products', 'IndustryOilGasController@showOgFuelQualifiedProducts')->name('industryoilgas.ajax.showOgFuelQualifiedProducts');
Route::get('industryoilgas-store-fuelmovement-all-details', 'IndustryOilGasController@storeFuelMovement')->name('industryoilgas.storeFuelMovement');
Route::get('save-oil-and-gas-product', 'IndustryOilGasController@saveProduct')->name('industryoilgas.ajax.saveProduct');
 
Route::post('industryoilgas-update', 'IndustryOilGasController@update')->name('industryoilgas.update');

Route::get('industry/oil-gas/product-stockin/', 'IndustryOilGasController@showProductStockInView')->name('get_industry_oil_gas_product_stockin_index_view')->middleware('CheckRole:onlyuser');
Route::get('industry/oil-gas/product-stockout/', 'IndustryOilGasController@showProductStockOutView')->name('get_industry_oil_gas_product_stockout_index_view')->middleware('CheckRole:onlyuser');
Route::get('industry/oil-gas/product-ledger/{oilgas_product_id}', 'IndustryOilGasController@showProductLedgerView')->name('get_industry_oil_gas_product_ledger_index_view')->middleware('CheckRole:onlyuser');
Route::get('industry/oil-gas/product-ledger_sale/{oilgas_product_id}/{location_id}','IndustryOilGasController@showProductLedgerViewSale')->name('get_industry_oil_gas_product_ledger_index_view_sales')->middleware('CheckRole:onlyuser');
Route::get('industry/oil-gas/product-ledger_receipt/{oilgas_product_id}/{location_id}', 'IndustryOilGasController@showProductLedgerViewReceipt')->name('get_industry_oil_gas_product_ledger_index_view_receipt')->middleware('CheckRole:onlyuser');

Route::get('industry/oil-gas/fuel-prices/{oilgas_product_id}', 'IndustryOilGasController@showFuelPriceView')->name('get_industry_oil_gas_fuel_price_index_view')->middleware('CheckRole:onlyuser');


Route::get('industry/oil-gas/fuel-local-prices/{loc_id}', 
	'IndustryOilGasController@showFuelLocalPriceView')->
	name('get_industry_oil_gas_fuel_local_price_index_view');


Route::post('industry/oil-gas/fuel-local-prices-datatable', 
	'IndustryOilGasController@showFuelLocalPriceDatatable')->
	name('get_industry_oil_gas_fuel_local_price_datatable');

Route::post('industry/oil-gas/fuel-local-prices/update', 
	'IndustryOilGasController@showFuelLocalPriceUpdate')->
	name('get_industry_oil_gas_fuel_local_price_update');


Route::post('industry/oil-gas/fuel-local-prices/pump-details', 
	'IndustryOilGasController@fuelLocalPriceDatatable')->
	name('fuel_local_price_pump_detail_datatable');


Route::post('industry/oil-gas/fuel-local-prices/pump-details/modal', 
	'IndustryOilGasController@fuelLocalPriceModal')->
	name('fuel_local_price_pump_detail_modal');

Route::post('industry/oil-gas/fuel-local-prices/pump-details/push', 
	'IndustryOilGasController@fuelLocalPricePush')->
	name('fuel_local_price_pump_detail_push');

Route::any('industry_oilgas_update_product_quantity_stock', 'IndustryOilGasController@updateProductQuantitystock')->name('industry.update_product_quantity_stock')->middleware('CheckRole:onlyuser');;
Route::any('industry_oilgas_update_rack_product_quantity_stock', 'IndustryOilGasController@updateRackProductQuantitystock')->name('industry.update_rack_product_quantity_stock')->middleware('CheckRole:onlyuser');;
Route::any('industry_oilgas_update_location_rack_product_quantity_stock', 'IndustryOilGasController@updateLocationProduct')->name('industry.update_location_rack_product_quantity_stock')->middleware('CheckRole:onlyuser');;



Route::post('get-oil-gas', 'IndustryOilGasController@index')->name('industryoilgas.ajax.index');
Route::post('stock-in-product', 'IndustryOilGasController@stockinproduct')->name('industryoilgas.ajax.stockinproduct');
Route::post('stock-out-product', 'IndustryOilGasController@stockoutproduct')->name('industryoilgas.ajax.stockoutproduct');
Route::post('get-fuel-prices', 'IndustryOilGasController@showFuelPrices')->name('industryoilgas.ajax.showFuelPrices');
Route::get('industryfuelprice-store', 'IndustryOilGasController@storeFuelPrices')->name('industryfuelprice.store');
Route::post('industryfuelprice-update-price', 'IndustryOilGasController@updateFuelPrices')->name('industryfuelprice.update.price');
Route::post('industryfuelprice-update-start-date', 'IndustryOilGasController@updateStartDateFuelPrices')->name('industryfuelprice.update.startDate');

Route::post('show-industry-fuel-price-edit-modal', 'IndustryOilGasController@showEditModalFuelPrice')
->name('industryfuelprice.edit.modal');

Route::post('delete-fuel-price/{id}', 'IndustryOilGasController@destroyFuelprice')
->name('industryoilgas.destroyFuelprice');

//Tank Management
Route::post('get-tank-management', 'IndustryOilGasController@showTankManagement')->name('industryoilgas.ajax.showTankManagement');

Route::get('industryoilgas-store-tank', 'IndustryOilGasController@storeTank')->
name('industryoilgas.storeTank');

Route::get('industryoilgas-store-fuel', 'IndustryOilGasController@storeFuel')->
name('industryoilgas.storeFuel');

Route::post('get-tank-monitoring', 'IndustryOilGasController@showTankMonitoring')->name('industryoilgas.ajax.showTankMonitoring');


Route::post('industrytank-update-height', 'IndustryOilGasController@updateTankHeight')->name('industrytank.update.height');
Route::get('tank-products', 'IndustryOilGasController@showTankProducts')->name('industryoilgas.ajax.showTankProducts');

Route::get('Filter-Tanks', 'IndustryOilGasController@showTank_AccordingLocation')->name('industryoilgas.showTank_AccordingLocation');
Route::post('Filter-Tanks-data', 'IndustryOilGasController@showTank_AccordingLocation')->name('industryoilgas.ajax.showTank_AccordingLocation');


Route::post('save-tank-products', 'IndustryOilGasController@saveTankProducts')->name('industryoilgas.ajax.saveTankProducts');
Route::get('get-tank-products', 'IndustryOilGasController@getTankProducts')->name('industryoilgas.ajax.getTankProducts');
Route::post('save-tank-no', 'IndustryOilGasController@saveTankNo')->name('industryoilgas.ajax.saveTankNo');
Route::post('delete-tank', 'IndustryOilGasController@destroyTank')->name('industryoilgas.destroy.tank');

Route::post('/location_custom','IndustryOilGasController@customLocation')->name('industryoilgas.customLocation');


Route::get('industry/serv-maintenance/assetDatatable','OGAssetMgmtController@assetMangLoad')->name('industryServMn.assetLoad');
Route::get('industry/serv-maintenance/asset/valueTable','OGAssetMgmtController@assetValues')->name('industryServMn.assetValues');
Route::get('industry/serv-maintenance/asset/serviceBook','OGAssetMgmtController@assetServiceBook')->name('assetServiceBook');
Route::get('industry/serv-maintenance/asset-product','OGAssetMgmtController@assetProduct')->name('assetProduct');

?>

