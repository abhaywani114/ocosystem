<?php


Route::resource('voucher', 'VoucherController');
Route::post('get-voucher', 'VoucherController@index')->
    name('voucher.ajax.index');

Route::get('show-voucher-view', 'VoucherController@showVoucherView')->
    name('voucher.ajax.product');

Route::get('voucher-store', 'VoucherController@store')->
name('voucher.store');


Route::post('show-voicher-edit-modal', 'VoucherController@showEditModal')
->name('voucher.edit.modal');
Route::post('voucher_update_barcode_promo', 'VoucherController@update_barcode_promo')->name('voucher.update_barcode_promo');
Route::post('voucher_update_barcode_name', 'VoucherController@update_barcode_name')->name('voucher.update_barcode_name');
Route::post('voucher_check_voucher_type', 'VoucherController@check_voucher_type')->name('voucher.check_voucher_type');

Route::get('landing/show-voucherproduct-view/{id}', 'VoucherController@showVoucherProductView')->
    name('voucherid.ajax.product');
Route::get('landing/voucherproductlist/{id}', 'VoucherController@VoucherProductList')->
    name('voucherid.ajax.productlist');

Route::post('voucher-update', 'VoucherController@update')->
name('voucher.update');

Route::post('voucher_product_active', 'VoucherController@voucher_product_active')->
name('voucher.voucher_product_active');

Route::get('opossum/terminal/voucher/search/{id}', 'VoucherController@search')->
name('voucher.search');

Route::post('opossum/terminal/voucher/redeem', 'VoucherController@redeem')->
name('voucher.redeem');

?>
