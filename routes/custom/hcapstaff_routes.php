<?php
/* Custom HumanCap Staff Routes */
Route::get('show-staff-view', 'HcapStaffController@showView')->name('hcapstaff_ajax_view')->middleware('CheckRole:onlyuser');
Route::get('staff-personal-details/{user_id}', 'HcapStaffController@personalDetails')->name('hcapstaff_ajax_personal_details')->middleware('CheckRole:onlyuser');
Route::post('staff-personal-details-update', 'HcapStaffController@personalDetailsUpdate')->name('hcapstaff_ajax_personal_details_update');
Route::post('staff-staff-details-update', 'HcapStaffController@staffDetailsUpdate')->name('hcapstaff_ajax_staff_details_update');
Route::post('staff-staff-appraisal-update', 'HcapStaffController@staffAppraisalUpdate')->name('hcapstaff_ajax_appraisal_update');
Route::post('staff-personal-tab', 'HcapStaffController@personalTab')->name('staff.ajax.personal.tab');
Route::post('staff-detail-tab', 'HcapStaffController@staffDetail')->name('staff.ajax.detail.tab');
Route::post('staff-picture', 'HcapStaffController@staffPicture')->name('staff.savePicture');
Route::post('staff-del-picture', 'HcapStaffController@staffDelPicture')->name('staff.delPicture');

?>
