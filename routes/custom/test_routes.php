<?php
/* Custom Test Routes */

/* Prototyping PTS-2 API */
Route::get('xget-battery-voltage','TestController@get_battery_voltage');
Route::get('xget-unique-identifier','TestController@get_unique_identifier');
Route::get('xget-firmware-information','TestController@get_firmware_information');
Route::get('xget-sd-information','TestController@get_sd_information');
Route::get('xget-user-information','TestController@get_user_information');

Route::get('xget-configuration-identifier','TestController@get_configuration_identifier');
Route::get('xget-datetime','TestController@get_datetime');
Route::get('xget-pts-network-settings','TestController@get_pts_network_settings');
Route::get('xget-system-decimal-digits','TestController@get_system_decimal_digits');
Route::get('xget-parameter/{device}/{number}/{address}','TestController@get_parameter');
Route::get('xget-pumps-configuration','TestController@get_pumps_configuration');
Route::get('xget-probes-configuration','TestController@get_probes_configuration');
Route::get('xget-fuel-grades-configuration','TestController@get_fuel_grades_configuration');
Route::get('xget-xpump-nozzles-configuration','TestController@get_pump_nozzles_configuration');
Route::get('xget-tanks-configuration','TestController@get_tanks_configuration');
Route::get('xget-users-configuration','TestController@get_users_configuration');
Route::get('xget-port-logging-configuration','TestController@get_port_logging_configuration');


Route::get('xpump-get-status/{pump_no}','TestController@pump_get_status');
Route::get('xpump-authorize/{pump_no}/{nozzle}/{type}/{dose}/{price}','TestController@pump_authorize');
Route::get('xpump-transaction-information/{pump_no}/{transaction}','TestController@pump_get_transaction_information');
Route::get('xpump-stop/{pump_no}','TestController@pump_stop');
Route::get('xpump-emergency-stop/{pump_no}','TestController@pump_emergency_stop');
Route::get('xpump-resume/{pump_no}','TestController@pump_resume');
Route::get('xpump-suspend/{pump_no}','TestController@pump_suspend');
Route::get('xpump-close-transaction/{pump_no}/{transaction}','TestController@pump_close_transaction');
Route::get('xpump-get-totals/{pump_no}/{nozzle}','TestController@pump_get_totals');
Route::get('xpump-get-prices/{pump_no}','TestController@pump_get_prices');
Route::get('xpump-get-display-data/{pump_no}','TestController@pump_get_display_data');
Route::get('xpump-get-tag/{pump_no}/{nozzle}','TestController@pump_get_tag');
Route::get('xpump-set-lights/{pump_no}/{state}','TestController@pump_set_lights');


?>
