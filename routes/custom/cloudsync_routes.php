<?php 
// Custom routes for Cloud Sync

Route::get('sync/pull_products/{api_key}/{merchant_id}',
	'CloudSyncController@pull_products')->name('cloud.sync.pull-products');

Route::post('sync/verify_licensekey',
	'CloudSyncController@verify_licensekey')->name('cloud.sync.verify-licensekey');

?>
