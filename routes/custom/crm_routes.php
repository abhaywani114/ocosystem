<?php
/* Custom Partner Routes */


	Route::resource('crm', 'CRMController');
	Route::post('show-cmr-edit-modal', 'CRMController@showEditModal')->name('crm.edit.modal');


	//Extented landing view;
	//Show CRM		
 	Route::get('show-crm-view', 'CRMController@showCRM')->name('landing.ajax.crm');
 	Route::post('crm-delete', 'CRMController@deleteCRM')->name('ajax.crm.delete');
?>

