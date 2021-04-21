<?php
Route::get('/consignment/{consignment_id}', 'ConsignmentController@showConsignmentView')->name('consignment.consignment');
Route::get('consignment-issued-list', 'ConsignmentController@showConsignmentIssuedListView')->name('consignment.issued');
Route::get('consignment-received-list', 'ConsignmentController@showConsignmentReceivedListView')->name('consignment.received');

?>
