<?php
Route::get('pump-authorize/{pump_no}/{type}/{dose}/{ipaddr}/{nozzle?}/{price?}','OposPetrolStationPumpController@pumpAuthorize');

Route::get('pumpCalibration/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpCalibration');

Route::get('pump-get-status/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpGetStatus');

Route::get('pump-get-totals/{pump_no}/{nozzle}/{ipaddr}',
	'OposPetrolStationPumpController@pumpGetTotals');

Route::get('pump-get-display-data/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpGetDisplayData');

Route::get('pump-close-transaction/{pump_no}/{transaction}',
	'OposPetrolStationPumpController@pumpCloseTransaction');

Route::get('get-fuel-grades-configuration',
	'OposPetrolStationPumpController@getFuelGradesConfiguration');

Route::post('pump-set-prices',
	'OposPetrolStationPumpController@pumpSetPrices');

Route::post('set-fuel-grades-configuration',
	'OposPetrolStationPumpController@setFuelGradesConfiguration');

Route::get('get-pumps-configuration/{ipaddr}',
	'OposPetrolStationPumpController@getPumpsConfiguration');

Route::post('set-pumps-configuration',
	'OposPetrolStationPumpController@setPumpsConfiguration');

Route::get('pump-get-unique-identifier/{ipaddr}',
	'OposPetrolStationPumpController@getUniqueIdentifier');

Route::get('pump-get-firmware-information/{ipaddr}',
	'OposPetrolStationPumpController@getFirmwareInformation');

Route::get('pump-get-sd-information/{ipaddr}',
	'OposPetrolStationPumpController@getSdInformation');

Route::get('pump-get-battery-voltage/{ipaddr}',
	'OposPetrolStationPumpController@getBatteryVoltage');

Route::get('pump-set-datetime/{datetime}',
	'OposPetrolStationPumpController@setDatetime');

Route::get('pump-get-datetime',
	'OposPetrolStationPumpController@getDatetime');

Route::get('pump-stop-filling/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpStopFilling');

Route::get('pump-suspend-filling/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpSuspendFilling');

Route::get('pump-resume-filling/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpResumeFilling');

Route::get('pump-done-filling/{pump_no}',
	'OposPetrolStationPumpController@pumpDoneFilling');

Route::get('pump-cancel-authorize/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpCancelAuthorize');

Route::get('pump-emergency-stop/{pump_no}/{ipaddr}',
	'OposPetrolStationPumpController@pumpEmergencyStop');

Route::get('pump-product-by-nozzle/{pump_no}/{nozzle}',
	'OposPetrolStationPumpController@pumpProductByNozzle');

Route::get('get-pump-nozzles-configuration',
	'OposPetrolStationPumpController@getPumpNozzlesConfiguration');

Route::post('set-pump-nozzles-configuration',
	'OposPetrolStationPumpController@setPumpNozzlesConfiguration');

Route::get('get-pts-network-settings',
	'OposPetrolStationPumpController@getPtsNetworkSettings');

Route::post('save-og-pumplog',
	'OposPetrolStationPumpController@saveOgPumpLog');

Route::get('get-product-by-name/{name}',
	'OposPetrolStationPumpController@getProductByName');
?>
