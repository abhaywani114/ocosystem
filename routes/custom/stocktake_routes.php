<?php
/* Custom StockTake Routes */
Route::get('inventorystocktake/{type}', 'StocktakeController@showInventoryStockTake');
Route::get('inventorystocktake_list/{id}', 'StocktakeController@showInventoryStockTakeList');
Route::get('inventorystocktake_multichecker/{id}', 'StocktakeController@showInventoryStockTakeMultichecker');
Route::get('inventorystocktake_page/{id}', 'StocktakeController@showInventoryStockTakePage');

Route::post('get-stocktake', 'StocktakeController@getInventoryStokTake')->name('stocktake.ajax.getStokTake');
Route::post('get-stocktakelist', 'StocktakeController@getInventoryStokTakeList')->name('stocktake.ajax.getStokTakeList');
Route::post('get-stocktakePage', 'StocktakeController@getInventoryStokTakePage')->name('stocktake.ajax.getStockTakePage');
Route::post('get-stockmultichecker', 'StocktakeController@getStockMultichecker')->name('stocktake.ajax.getMultichecker');

Route::post('delete-stocktakemgmt', 'StocktakeController@destroyStm')->name('stocktakeManagment.delete.modal');
Route::post('delete-stocktakemgmt-modal/{id}', 'StocktakeController@destoryStocktakeManagement')->name('data.ajax.destoryStocktakeManagement');

Route::post('show-stocktake-edit-modal', 'StocktakeController@showEditModal')->name('stocktake.edit.modal');

Route::post('stocktake-management-update', 'StocktakeController@updateStockManagementDetail')->name('data.ajax.stocktakeUpdate');


Route::post('stocktakemgmt-store', 'StocktakeController@stocktakeStore')->name('stocktakemgmt.store');
Route::post('stocktakemgmt-checker', 'StocktakeController@checkerNameModal')->name('Checker.name.get');

Route::post('stocktakepage-report', 'StocktakeController@stocktakePageReport')->name('stocktakepage.ajax.report');
Route::post('stocktakepage-cofrim', 'StocktakeController@stocktakeListConfrim')->name('stocktakconfirm.ajax.mgmt');
?>
