<?php 
// Custom routes for Crane Service Report
Route::get('crane-service-view', 'CSRController@showCSR')->name('csr_view');
Route::get('crane-service-reports', 'CSRController@index')->name('csr.ajax.index');
Route::get('csr-show-edit-modal', 'CSRController@showEditModal')->name('csr.edit.modal');


Route::delete('csr-delete-data/{id}', 'CSRController@destroy')->name('csr.ajax.delete');
Route::post('csr-update-data', 'CSRController@update')->name('csr.ajax.update');
Route::post('crane-service-reports', 'CSRController@store')->name('csr.store');


Route::get('crane-service-reports/{csr_id}', 'CSRController@showForm')->name('csr.form');
Route::post('crane-service-reports/form', 'CSRController@saveForm')->name('csr.form.save');
Route::get('crane-service-pdf/{csr_id}', 'CSRController@downloadPdf')->name('csr.pdf');

Route::post('crane-service-reports/products/modal', 'CSRController@openProductsModal')->name('csr.products.parts');
Route::post('crane-service-reports/products/inventory', 'CSRController@getInventoryProducts')->name('csr.products.inventory');


Route::get('crane-service-reports/parts-used/{csrform_id}', 'CSRController@getPartsUsed')->name('csr.form.parts');
Route::post('crane-service-reports/parts-used/', 'CSRController@AddPartUsed')->name('csr.parts.add');
Route::post('crane-service-reports/parts-used/update', 'CSRController@updatePartsUsed')->name('csr.parts.update');
Route::delete('crane-service-reports/parts-used/{id}', 'CSRController@destroyPartUsed')->name('csr.parts.delete');

Route::get('crane-service-reports/parts-used-modals/edit-modal', 'CSRController@showPartsEditModal')->name('csr.parts.edit.modal');
Route::post('crane-service-reports/approvals', 'CSRController@saveApprovals')->name('csr.approval.save');

?>
