<?php

Route::resource('warranty', 'WarrantyController');

Route::post('get-warranty', 'WarrantyController@index')->
    name('warranty.ajax.index');
    
Route::get('show-warranty-view', 'WarrantyController@showWarrantyView')->
    name('warranty.ajax.product');
    
Route::get('warranty-store', 'WarrantyController@store')->
name('warranty.store');

Route::get('get-warranty-product', 'WarrantyController@getWarrantyProduct')->
    name('warranty.ajax.getproduct');

Route::get('landing/show-warrantyproduct-view/{id}', 'WarrantyController@showWarrantyProductView')->
    name('warrantyid.ajax.product');


Route::post('show-warranty-edit-modal', 'WarrantyController@showEditModal')
->name('warranty.edit.modal');


Route::post('warranty-update', 'WarrantyController@update')->
name('warranty.update');
?>
