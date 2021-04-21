<?php
/* Custom SuperAdmin Routes */
Route::get('show-superadminlanding-view', 'SuperadminController@showLandingView')->
	name('landing.ajax.superadmin')->middleware('CheckRole:onlysuperadmin');

Route::get('show-superadmin-view', 'SuperadminController@showSuperadminView')->
	name('superadmin.superadmin')->middleware('CheckRole:onlysuperadmin');

Route::resource('superadmin','SuperadminController')->middleware('CheckRole:onlysuperadmin');

Route::post('show-admin-edit-modal', 'SuperadminController@showEditModal')->name('superadmin.edit.modal')->middleware('CheckRole:onlysuperadmin');
Route::post('update-admin-role', 'SuperadminController@updateUserRole')->name('superadmin.edit.role.update')->middleware('CheckRole:onlysuperadmin');
Route::post('update-admin-status', 'SuperadminController@updateUserStatus')->name('superadmin.edit.status.update')->middleware('CheckRole:onlysuperadmin');
Route::post('update-admin-data', 'SuperadminController@updateUserFields')->name('superadmin.edit.update')->middleware('CheckRole:onlysuperadmin');

Route::post('add-super-admin','SuperadminController@addAdmin')->name('superadmin.addAdmin')->middleware('CheckRole:onlysuperadmin');
?>
