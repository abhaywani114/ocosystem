<?php 
// Custom routes for CMR Corrective Maintenance Report
Route::get('corrective-maintenance-view', 'CMRController@showCMR')->name('cmr_view');
Route::get('corrective-maintenance-reports', 'CMRController@index')->name('cmr.ajax.index');
Route::get('cmr-show-edit-modal', 'CMRController@showEditModal')->name('cmr.edit.modal');


Route::delete('cmr-delete-data/{id}', 'CMRController@destroy')->name('cmr.ajax.delete');
Route::post('cmr-update-data', 'CMRController@update')->name('cmr.ajax.update');
Route::post('corrective-maintenance-reports', 'CMRController@store')->name('cmr.store');


Route::get('corrective-maintenance-reports/{cmr_id}', 'CMRController@showForm')->name('cmr.form');
Route::post('corrective-maintenance-reports/form', 'CMRController@saveForm')->name('cmr.form.save');
Route::get('corrective-maintenance-reports/print/{cmr_id}', 'CMRController@printForm')->name('cmr.form.print');


Route::post('corrective-maintenance-reports/products/modal', 'CMRController@openProductsModal')->name('cmr.products.parts');
Route::post('corrective-maintenance-reports/products/inventory', 'CMRController@getInventoryProducts')->name('cmr.products.inventory');


Route::get('corrective-maintenance-reports/parts-used/{cmrform_id}', 'CMRController@getPartsUsed')->name('cmr.form.parts');
Route::post('corrective-maintenance-reports/parts-used/', 'CMRController@AddPartUsed')->name('cmr.parts.add');
Route::post('corrective-maintenance-reports/parts-used/update', 'CMRController@updatePartsUsed')->name('cmr.parts.update');
Route::delete('corrective-maintenance-reports/parts-used/{id}', 'CMRController@destroyPartUsed')->name('cmr.parts.delete');

Route::get('corrective-maintenance-reports/parts-used-modals/edit-modal', 'CMRController@showPartsEditModal')->name('cmr.parts.edit.modal');
Route::post('corrective-maintenance-reports/approvals', 'CMRController@saveApprovals')->name('cmr.approval.save');


?>