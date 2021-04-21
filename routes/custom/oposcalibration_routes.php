<?php 
// Custom routes for OPOS Calibration
Route::get('opossum/calibration/prefData','OposCalibrationController@prefData');

Route::get('opossum/calibration/getSystemId','OposCalibrationController@getSystemId');

Route::post('opossum/calibration/getSystemId/{systemId}-{locationId}-{terminalId}-{staffId}-{totalAmnt}-{pumpNo}-{nozzle}-{logo}-{address}-{companyId}','OposCalibrationController@updateDb');

Route::post('opossum/calibration/updatedb','OposCalibrationController@updateDb');

Route::get('opossum/calibration/list','OposCalibrationController@calibrationList')->
name('opossum.calibration_list');

Route::get('opossum/calibration/list/{systemid}','OposCalibrationController@calibrationReceipt')->
name('opossum.calibration_receipt');

Route::get('opossum/calibration/formatdate/{date}','OposCalibrationController@formatDate')->
name('opossum.calibration_formatDate');

Route::get('opossum/calibration/getProductName/{nozzle}','OposCalibrationController@productName')->
name('opossum.calibration_getProduct');

?>
