<?php
/* Custom Staff Routes */

Route::resource('staff', 'StaffController');
Route::post('show-staff-edit-modal', 'StaffController@showEditModal')->name('staff.edit.modal');
Route::post('update-staff-data', 'StaffController@updateStaffFields')->name('staff.edit.update');
Route::post('update-staff-status', 'StaffController@updateStaffStatus')->name('staff.edit.status.update');

?>
