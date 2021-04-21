<?php
/* Custom Virtual Cabinet Routes */

Route::get('show-vcauto-view', 'VirtualCabinetController@showVCAutoView')->
	name('landing.ajax.vcauto')->middleware('CheckRole:onlyuser');

Route::get('show-virtualcabinet-view/{id}','VirtualCabinetController@show1View')->
	name('virtualcabinet.ajax.auto');

Route::get('show-pigeon-view','VirtualCabinetController@showPigeonView')->
	name('virtualcabinet.ajax.pigeon');


	Route::get('show-vcrack-view', 'VirtualCabinetController@showVCRackView')->
	name('vcrack.index');

	Route::get('show-vcrack-file-view', 'VirtualCabinetController@showVCRackFileView')->
	name('vcrack.file.index');

Route::post('vcab-opossum-model','VirtualCabinetController@terminal_model')
->name('vcab.terminal_model');

Route::post('vcab-opossum-model_data','VirtualCabinetController@terminal_model_data')
->name('vcab.terminal_model_data');


Route::post('vcab-inventory-cost', 'VirtualCabinetController@inventoryCosts')->name('vcab.ajax.inventoryCosts');
Route::post('vcab-tracking-report-model','VirtualCabinetController@tracking_report_model')
	->name('vcab.tracking_report_model');

Route::post('vcab-tracking-report-model_data','VirtualCabinetController@tracking_report_model_data')
	->name('vcab.tracking_report_model_data');

?>
