<?php
Route::resource('location', 'LocationController');

Route::post('get-location-data','LocationController@index')->name('location.ajax.index');

Route::post('show-location-edit-modal', 'LocationController@showEditModal')->name('location.edit.modal')->middleware('CheckRole:onlyuser');

Route::post('show-LocationControllerupdate-model','LocationController@update')->name('location.post.update')->middleware('CheckRole:onlyuser');

Route::post('update-terminal-operation-hour','LocationController@updateTerminalTime')->name('location.terminalhour.update')->middleware('CheckRole:onlyuser');

Route::post('get-terminal-operation-hour','LocationController@getTerminalTime')->name('location.terminalhour.get');

Route::get('foodcourt-tenant/{locationId}', 'LocationController@foodCourtTenant');
Route::get('foodcourt-merchant-terminal/{locationId}/{merchantId}', 'LocationController@foodCourtMerchantTerminal');

Route::post('save-foodcourt-tenant', 'LocationController@saveFoodcourtTenant')->name('location.ajax.saveFoodcourtTenant');

Route::post('tenant-terminals', 'LocationController@tenantTerminals')->name('location.ajax.tenantTerminals');
Route::post('save-tenant-terminal', 'LocationController@saveTenantTerminal')->name('location.ajax.saveTenantTerminal');
Route::post('delete-tenant-terminal', 'LocationController@delTenantTerminal')->name('location.ajax.delTenantTerminal');
Route::post('location/branch-location','LocationController@getBranchLocationByLoggedInUser')->name('location.branch.get');

Route::post('location/saveLocationImage','LocationController@saveLocationImage')->name('location.saveLocationImage');

Route::post('location/deleteLocationImage','LocationController@deleteLocationImage')->name('location.deleteLocationImage');

Route::get('location-barcode-page/{locationId}','LocationController@showBarcodePage')->name('location.barcode_page');
Route::get('location-barcode-fetch/{locationId}','LocationController@fetchBarcodePage')->name('location.barcode_fetch');
Route::post('location-barcode-new/{locationId}','LocationController@new_location_barcode')->name('location.barcode_new');
Route::post('location-barcode-name-update/{locationId}','LocationController@location_barcode_name_update')->name('location.location_barcode_name_update');
Route::post('location-barcode-delete/{locationId}','LocationController@location_barcode_delete')->name('location.location_barcode_delete');

Route::post('location-license-key-generate','LocationController@generateLicenseKey')->name('location.generate_license_key');
?>
