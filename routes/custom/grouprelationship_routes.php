<?php 
// Custom routes for Group Relationship 

Route::get('group-relationship', 'GroupRelationshipController@groupIndex')->name('show-group-relationship');
Route::post('group-relationship-two-way-linking', 'GroupRelationshipController@GroupsaveMerchantTwoWayLinking')->name('data.ajax.GroupsaveMerchantTwoWayLinking');
Route::get('show-group-relationship', 'GroupRelationshipController@showGroupRelationshipData')->name('data.ajax.showGroupRelationship');
Route::post('get-company-holding-details', 'GroupRelationshipController@getCompanyHoldingDetails')->name('data.ajax.getCompanyHoldingDetails');
Route::post('get-holding-list', 'GroupRelationshipController@getHoldingList')->name('data.ajax.getHoldingList');
Route::post('delete-group', 'GroupRelationshipController@delGroup')->name('group.delGroup');
Route::post('group-update-name', 'GroupRelationshipController@updateName')->name('group.updateName');
Route::post('show-holding', 'GroupRelationshipController@showGroupHolding')->name('data.ajax.showGroupHolding');
Route::post('group-update-icon', 'GroupRelationshipController@updateIcon')->name('group.updateIcon');
Route::post('get-holding-data', 'GroupRelationshipController@getHoldingData')->name('data.ajax.getHoldingData');
Route::post('update-holding-psa', 'GroupRelationshipController@updateHoldingPSA')->name('group.updateHoldingPSA');
Route::post('update-holding-percentage', 'GroupRelationshipController@updateHoldingPercentage')->name('group.updateHoldingPercentage');
Route::post('inbound-remote-login', 'GroupRelationshipController@InboundRemoteLogin')->name('group.InboundRemoteLogin');
Route::post('delete-group-icon', 'GroupRelationshipController@delPicture')->name('group.delPicture');

?>

