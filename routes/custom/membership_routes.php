<?php

/* Custom Membership Routes */
Route::resource('membership', 'MembershipController');

Route::get('membership', 'CampaignController@showCampaignView');

Route::post('get-membership', 'MembershipController@index')->
    name('membership.ajax.index');

Route::get('show-membership-view', 'MembershipController@showMembershipView')->
    name('membership.ajax.member');

Route::get('membership-store', 'MembershipController@store')->
name('membership.store');

Route::post('show-membership-edit-modal', 'MembershipController@showEditModal')
->name('membership.edit.modal');
Route::get('landing/membership_products/{id}', 'MembershipController@showMembershipProducts')->name('membership_products');


Route::post('membership-update', 'MembershipController@update')->name('membership.update');


// mobile routes
Route::get('mob-member', 'MobMemberController@member')

?>
