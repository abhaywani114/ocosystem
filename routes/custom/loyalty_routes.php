<?php
/* Custom Loyalty Routes */
Route::post('loyalty-stored', 'LoyaltyController@stored')->
name('loyalty.stored');

Route::post('loyalty-storing', 'LoyaltyController@storing')->
name('loyalty.storing');
//**b@ttl3
Route::post('opossum_save_unconfirmed_data','OpossumController@save_unconfirmed_data')
    ->name('opossum.save_unconfirmed_data');
//**b@ttl3
Route::get('opossum_get_history','OpossumController@getHistory')
    ->name('opossum.get_history');
//**b@ttl3
Route::post('update-product-redemption-point', 'LoyaltyController@updateProductRedemptionPoint')
->name('update-product-redemption-point');
//**b@ttl3
Route::post('update-product-redemption-active-status', 'LoyaltyController@updateActive')
->name('update-product-redemption-active-status');
//**b@ttl3
Route::post('update-period-expiry', 'LoyaltyController@updatePeriodExpiry')
->name('update-period-expiry');
//**b@ttl3
Route::post('update-validity', 'LoyaltyController@updateValidity')
->name('update-validity');
Route::post('loyalty_save_date','LoyaltyController@save_validity')
    ->name('loyalty.save_date');
?>
