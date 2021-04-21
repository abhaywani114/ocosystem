<?php
/* Custom OPOSsum Member Routes */

Route::post('opossum/opossum-save-member', 'OposMemberController@saveMember')->name('opossum.ajax.saveMember');
Route::post('opos_component/loyalty-points', 'OposMemberController@searchMember')->name('opossum.ajax.searchMember');
Route::post('opos_component/save-loyalty-points', 'OposMemberController@saveLoyalty')->name('opossum.ajax.saveLoyalty');
Route::post('opossum/opossum-save-member-points', 'OposMemberController@saveMemberMtsPoints')->name('opossum.ajax.saveMemberMtsPoints');
Route::post('opossum/validate', 'OposMemberController@validateMember')->name('opossum.validate');
Route::get('opossum/pointredemption/{member_id}/{location_id}', 'OposMemberController@PointRedemption')->name('opossum.pointredemption');
Route::get('opossum/getpointredemption/{id}', 'OposMemberController@getPointRedemption')->name('opossum.getpointredemption');

?>
