<?php
/* Custom Forecourt Controller Routes */
Route::get('get-config-file/{ipaddr}','ForecourtController@getConfigFile')->
	name('controllermgmt.get-config-file');

Route::get('get-pumps-by-controller/{controller_id}','ForecourtController@getPumpsByController')->
	name('controllermgmt.get-pumps-by-controller');

Route::get('get-nozzle-product-mapping/{owner_user_id}','ForecourtController@getNozzleProductMapping')->
	name('controllermgmt.get-nozzle-product-mapping');

Route::get('get-ogfuel-products/{owner_user_id}','ForecourtController@getOGFuelProducts')->
	name('controllermgmt.get-ogfuel-products');

Route::get('get-active-ogfuel-products/{owner_user_id}','ForecourtController@getActiveOGFuelProducts')->
	name('controllermgmt.get-active-ogfuel-products');

Route::get('get-owner-userid/{controller_id}','ForecourtController@getOwnerUserId')->
	name('controllermgmt.get-owner-userid');

Route::post('update-ipaddress/{controller_id}','ForecourtController@updateIpAddress')->
	name('controllermgmt.update-ipaddress');

Route::get('get-pull-data/{controller_id}','ForecourtController@getPullData')->
	name('controllermgmt.pull');

Route::get('get-controller-mgmt/{locationId}','ForecourtController@index')->
	name('controllermgmt.index');

Route::get('get-controller-mgmt-data/{locationId}',
	'ForecourtController@fcContrlr')->
	name('controllermgmt.data');

Route::post('get-controller-mgmt-new/{locationId}',
	'ForecourtController@newController')->
	name('controllermgmt.new');

Route::post('update-controller-info/{controller_id}',
	'ForecourtController@updateController')->
	name('controllermgmt.update');

Route::post('update-pump-disp',
	'ForecourtController@updateControllerDisp')->
	name('controllermgmt.updateDisp');

Route::post('save-controller-mgmt/savedata',
	'ForecourtController@saveController')->
	name('controllermgmt.save');

Route::post('save-pump-mgmt/savedata','ForecourtController@savePump')->
	name('pumpmgmt.save');

Route::post('get-controller-mgmt-updateIp/{ipAddress}/{controllerId}/{fieldType}',
	'ForecourtController@updateIp')->
	name('controllermgmt.updateIp');

Route::get('get-controller-mgmt-deleteId/{controllerId}',
	'ForecourtController@delController')->
	name('controllermgmt.delController');

Route::get('fc-formatDate/{date}','ForecourtController@formatDate')->
	name('controllermgmt.date');

Route::get('pump-mgmt/{controllerId}','ForecourtController@PumpMgment')->
	name('PumpMgment');

Route::get('atg-mgmt/{controllerId}','ForecourtController@AtgMgment')->
	name('AtgMgment');

Route::post('atg-mgmt/table','ForecourtController@ATGMgmentDataTable')->
	name('AtgMgment.table');

Route::post('atg-mgmt/new','ForecourtController@ATGMgmentNew')->
	name('AtgMgment.newRecord');

Route::post('atg-mgmt/tank_no/update','ForecourtController@ATGMgmentUpdateTankNo')->
	name('AtgMgment.update.tank_no');

Route::post('/atg-mgmt/delete','ForecourtController@ATGDelete')->
	name('AtgMgment.update.delete');

Route::post('pump-nozzle','ForecourtController@pumpNozzle')->
	name('pumpNozzle');

Route::post('save-nozzle-data','ForecourtController@savePumpNozzleData')->
	name('pumpNozzleData');

Route::get('pump-mgmt-data/{controllerId}','ForecourtController@pumpMgmt')->
	name('pump-mgmt.data');

Route::get('pump-mgmt-new/{controllerId}','ForecourtController@newPump')->
	name('pump-mgmt.new');

Route::get('pump-mgmt-updatePump/{id}/{pump_no}',
	'ForecourtController@updatePump')->
	name('controllermgmt.updatePump');

Route::get('pump-mgmt-deleteId/{pumpId}','ForecourtController@delPump')->
	name('controllermgmt.delPump');

Route::get('pump-mgmt-getPumpData/{controllerId}/{pump_no}/{pumpId}','ForecourtController@getPumpData')->
	name('getPumpData');

Route::post('save-hardware-dump-file-data','ForecourtController@saveHardwareDumpFile')->
	name('hardware.saveFileHardware');


Route::get('/forecourtcontroller/converter/{controllerId}','ForecourtController@converterLanding')->
	name('forecourtcontroller.convertor');


Route::post('/forecourtcontroller/converter/table','ForecourtController@converterMainTable')->
	name('forecourtcontroller.convertor.m_table');

Route::post('/forecourtcontroller/converter/new','ForecourtController@newConvertor')->
	name('forecourtcontroller.convertor.new_record');

Route::post('/forecourtcontroller/converter/update','ForecourtController@convertorUpdate')->
	name('forecourtcontroller.convertor.update_record');


Route::post('/forecourtcontroller/converter/portTable','ForecourtController@convertorPortTable')->
	name('forecourtcontroller.convertor.portTable');


Route::post('/forecourtcontroller/converter/port/new','ForecourtController@convertorPortNew')->
	name('forecourtcontroller.convertor.portNew');

Route::post('/forecourtcontroller/converter/port/update','ForecourtController@convertorPortUpdate')->
	name('forecourtcontroller.convertor.portUpdate');

Route::get('/detect-hardware','ForecourtController@detectHardware')->
	name('forecourtcontroller.detectHardware');

?>

