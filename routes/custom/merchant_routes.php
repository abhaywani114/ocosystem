<?php
Route::resource('merchant', 'MerchantController');

Route::post('landing-superadmin-showMerchant','MerchantController@index')->name('merchant.post.getdata');

Route::get('landing-superadmin-showMerchant','MerchantController@showMerchant')->name('landing.superadmin.merchant');

Route::post('show-superadmin-merchant-edit-model','MerchantController@showEditModel')->name('merchant.edit.modal');

Route::post('show-superadmin-merchant-update-model','MerchantController@update')->name('merchant.post.update');

Route::post('merchant_connected_platforms', 'MerchantController@connected_platforms')->name('merchant.connected.platforms');

Route::post('merchant_upsert_connected_platforms', 'MerchantController@upsert_product_platform')->name('merchant.connected.upsertplatforms');

Route::post('merchant-staff-status', 'MerchantController@updateUserStatus')->name('mechant.edit.status.update');

Route::get('viewmerchant/{id}', 'MerchantController@viewmerchant')->name('mechant.viewmerchant');
Route::get('viewmerchant/{id}/processed', 'MerchantController@viewmerchant')->name('mechant.viewmerchant.post');

?>
