<?php
/* Custom Retail Membership Routes */
Route::resource('retailmembershiplist','RetailMembershipController');
Route::get('retailmembership-view', 'RetailMembershipController@showRetailMembershipView')->name('retail_membership_view');

Route::get('retailmembership-point-ledger-view', 'RetailMembershipController@showRetailMembershippointledgerView')->name('retail_membership_point_ledger_view');
Route::get('retailmembership-point-ledger-view/indexledger', 'RetailMembershipController@indexforledger')->name('retail_membership_point_ledger_view.indexledger');


Route::get('retailmembership-loyalty-ledger-view', 'RetailMembershipController@showRetailMembershiployaltyledgerView')->name('retail_membership_loyalty_ledger_view');
Route::get('retailmembership-loyalty-ledger-view/indexledger', 'RetailMembershipController@indexforloyalty')->name('retail_membership_loyalty_ledger_view.indexloyalty');


Route::get('retailmembership-wallet-ledger-view', 'RetailMembershipController@showRetailMembershipwalletledgerView')->name('retail_membership_wallet_ledger_view');
Route::get('retailmembership-wallet-ledger-view/indexledger', 'RetailMembershipController@indexforwallet')->name('retail_membership_wallet_ledger_view.indexwallet');


Route::get('show-product_redemption-view', 'RetailMembershipController@showProductRedemptionView');
Route::post('Save-Validity', 'RetailMembershipController@saveValidity')->name('save_validity');
Route::post('Save-Terms-Condition', 'RetailMembershipController@saveTermsCondition')->name('save_termsCondition');
?>
