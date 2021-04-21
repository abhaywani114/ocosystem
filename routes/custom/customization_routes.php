<?php
/* Custom Customization Routes */


Route::resource('customization', 'CustomizationController');

Route::get('show-customization-view',
	'CustomizationController@showCustomizationView')->
    name('customization.ajax.product');


Route::post('get-customization', 'CustomizationController@index')->
    name('customization.ajax.index');

Route::get('customization-store', 'CustomizationController@store')->
name('customization.store');

Route::get('customization.ajax.price', 'CustomizationController@updatePrice')
->name('customization.ajax.price');

Route::post('show-customprp-edit-modal', 'CustomizationController@showEditModal')
->name('custompro.edit.modal');

Route::post('customization-details-dialog','CustomizationController@dialog')->name('customization.details.dialog');
?>
