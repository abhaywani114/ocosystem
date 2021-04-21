<?php
/* Custom Drum & Barrel Routes */

Route::resource('drumbarrel', 'DrumBarrelController');

Route::get('show-drumbarrel-view','DrumBarrelController@DrumBarrelView')->name('drumbarrel.ajax.product');

Route::post('get-drumbarrel', 'DrumBarrelController@index')->name('drumbarrel.ajax.index');

Route::get('drumbarrel-store', 'DrumBarrelController@store')->name('drumbarrel.store');

Route::post('show-drumbarrel-edit-modal', 'DrumBarrelController@showEditModal')->name('drumbarrel.edit.modal');

Route::post('drumbarrel-details-dialog','DrumBarrelController@dialog')->name('drumbarrel.details.dialog');

Route::get('drumbarrel.ajax.price', 'DrumBarrelController@updatePrice')->name('drumbarrel.ajax.price');

Route::get('drumbarrel.ajax.deposit', 'DrumBarrelController@updateDeposit')->name('drumbarrel.ajax.deposit');

Route::get('landing/drumbarrel/{id}', 'DrumBarrelController@showDrumBarrelProduct');
Route::get('drumbarrel-distribution-view', 'DrumBarrelController@showDrumBarrelDistribution');
Route::get('drumbarrel-distribution-product-view', 'DrumBarrelController@showDrumBarrelDistributionProduct');
Route::get('drumbarrel-distribution-qty-view', 'DrumBarrelController@showDrumBarrelDistributionQty');
Route::post('landing/drumbarrelbarcode', 'DrumBarrelController@showBarcodeTable')->name('drumbarrel-barcode.table.show');
?>
