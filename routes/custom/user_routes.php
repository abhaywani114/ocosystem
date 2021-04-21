<?php
/* Custom Staff Routes */

Route::resource('user', 'UserController');
Route::post('show-staff-edit-modal', 'UserController@showEditModal')->name('user.edit.modal');
Route::post('update-staff-data', 'UserController@updateUserFields')->name('user.edit.update');
Route::post('update-staff-status', 'UserController@updateUserStatus')->name('user.edit.status.update');
Route::post('update-staff-role', 'UserController@updateUserRole')->name('user.edit.role.update');

Route::post('/user/function','UserController@toggleFunction')->name('user.function.toggle');
Route::post('/user/mobroles','UserController@toggleMobileRoles')->name('user.mobroles.toggle');
Route::post('/user/location_auth','UserController@toggleLocationAuth')->name('user.location.auth');
?>
