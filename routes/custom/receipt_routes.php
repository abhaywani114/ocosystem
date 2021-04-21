<?php
Route::get('receipt', 'ReceiptController@showReceiptView')->name('receipt.receipt');
Route::get('receipt-oposum-list', 'ReceiptController@showReceiptOposumListView')->name('receipt.oposum');
Route::get('receipt-goldfish-issued-list', 'ReceiptController@showReceiptGoldFishIssuedListView')->name('receipt.goldfish.issued');
Route::get('receipt-goldfish-received-list', 'ReceiptController@showReceiptGoldFishReceivedListView')->name('receipt.goldfish.received');
Route::get('eod-list/{terminal_id}/{date}', 'EODController@showEODReceiptView')->name('eod.receipt');

Route::post('eod-receipt-opposum-model_data','EODtController@receipt_list_data')
->name('eod.oposum_receipt_list');
Route::post('eod-reciept__month_view','EODController@reciept_month')->
name('eod.reciept_month');

Route::post('eod-month_view','EODController@eod_month')->
name('eod.eod_month');

Route::post('localaccess/interface/eod-receiptupdate', 'EODController@getReceiptFromLocal');

Route::post('eod-shift-list','EODController@shift_list')
    ->name('eod.shift_list');

Route::post('eod-receipt-list','ReceiptController@receipt_list')
    ->name('eod.receipt_list');

Route::post('eod-shift-list_data','ReceiptController@shift_list_data')
    ->name('eod.shift_list_data');

Route::post('eod-receipt_opos_list_data','ReceiptController@receipt_opos_list_data')
    ->name('eod.receipt_opos_list_data');

Route::post('eod-shift_details','ReceiptController@shift_details')->
name('eod.shift_details');

Route::post('receipt-eod_print','ReceiptController@eod_print')->
name('receipt.eod_print');

Route::post('receipt-shift_print','ReceiptController@shift_print')->
name('receipt.shift_print');

Route::post('calibration-receipt_list_data','OposCalibrationController@receipt_calibration_list_data')
    ->name('calibration.receipt_calibration_list_data');

?>
