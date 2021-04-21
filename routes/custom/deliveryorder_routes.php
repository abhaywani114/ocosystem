<?php
/* Custom DeliveryOrder Routes */
Route::get('deliveryorder','DeliveryOrderController@doindex')->name('delieveryorder.index');
Route::get('deliveryorder/{record_type}/{deliveryorder_id}','DeliveryOrderController@doView')->name('delieveryorderbyid.index');
Route::get('downloadDelivery/{record_type}/{deliveryorder_id}','DeliveryOrderController@downloadPdf')->name('downloadDelivery.pdf');
Route::post('deliveryorder-complete','DeliveryOrderController@doComplete')->name('do.complete');

Route::resource('deliveryorderlist','DeliveryOrderController');

//Extented landing view;

Route::get('show-issued-dolist', 'DeliveryOrderController@showIssuedlist')->name('landing.ajax.deliveryorderissuedlist');
Route::get('show-received-dolist', 'DeliveryOrderController@showReceivedlist')->name('landing.ajax.deliveryorderreceivedlist');


?>
