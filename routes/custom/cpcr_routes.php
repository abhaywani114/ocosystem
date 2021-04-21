<?php
    Route::get('crane-preventive-check-view', 'CPCRController@show_cpcr')->name('cpcr_view');
    Route::get('crane-preventive-check-reports', 'CPCRController@index')->name('cpcr.ajax.index');
	Route::get('cpcr-show-edit-modal', 'CPCRController@showEditModal')->name('cpcr.edit.modal');


	Route::delete('cpcr-delete-data/{id}', 'CPCRController@destroy')->name('cpcr.ajax.delete');
	Route::post('cpcr-update-data', 'CPCRController@update')->name('cpcr.ajax.update');
	Route::post('crane-preventive-check-reports', 'CPCRController@store')->name('cpcr.store');

    Route::get('crane-preventive-check-reports/{id}', 'CPCRController@cpcr_form')->name('cpcr.form');
	Route::post('crane-preventive-check-reports/form', 'CPCRController@saveForm')->name('cpcr.form.save');
	Route::post('crane-preventive-check-reports/approvals', 'CPCRController@saveApprovals')->name('cpcr.approval.save');
    Route::get('crane-preventive-check-pdf/{id}', 'CPCRController@cpcr_pdf')->name('cpcr.pdf');
?>