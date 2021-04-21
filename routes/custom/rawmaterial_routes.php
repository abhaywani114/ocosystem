<?php
Route::resource('rawmaterial', 'RawMaterialController');
Route::post('get-rawmaterial', 'RawMaterialController@index')->
    name('rawmaterial.ajax.index');

Route::get('show-rawmaterial-view', 'RawMaterialController@showRawmaterialView')->
    name('rawmaterial.ajax.product');

Route::get('rawmaterial-store', 'RawMaterialController@store')->
name('rawmaterial.store');


Route::post('show-rawmaterial-edit-modal', 'RawMaterialController@showEditModal')->name('rawmaterial.edit.modal');
Route::get('landing/rawmaterialbarcode/{id}', 'RawMaterialController@showRawmaterialBarcode')->name('rawmaterial_barcode');

Route::post('rawmaterial-update', 'RawMaterialController@update')->
name('rawmaterial.update');

Route::get('rawmaterial_quantity/{id}', 'RawMaterialController@showRawMaterialQuantity');


Route::get('rawmaterialstockin', 'RawMaterialController@showRMStockIn');
Route::get('rawmaterialstockout', 'RawMaterialController@showRMStockOut');

?>