<?php
/* Custom client Routes */

Route::resource('client', 'ClientController');
Route::post('show-client-edit-modal', 'ClientController@showEditModal')->name('client.edit.modal');
Route::post('update-client-status', 'ClientController@updateClientStatus')->name('client.edit.status.update');
Route::get('/client/client/{client_id}','ClientController@addClient');

?>
