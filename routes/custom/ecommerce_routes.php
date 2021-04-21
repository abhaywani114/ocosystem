<?php
Route::get('show-ecommerce-view','ECommerceController@eCommerce')->
    name('ecommerce.ajax.product');
	
Route::post('show-ecommerce-receipt','ECommerceController@receipt')->
    name('ecommerce.ajax.receipt');	
	
Route::post('ecommerce-remark','ECommerceController@remark')->
    name('ecommerce.ajax.remark');		

Route::post('get-ecommerce', 'ECommerceController@index')
->name('ecommerce.ajax.index');

Route::post('connected_platforms', 'ECommerceController@connected_platforms')->name('ecommerce.connected.platforms');

Route::post('upsert_connected_platforms', 'ECommerceController@upsert_product_platform')->name('ecommerce.connected.upsertplatforms');

Route::get('product_ledger', 'ECommerceController@product_ledger')->name('ecommerce.product.ledger');

Route::get('mob-ecommerce','MobEcommerceController@mobEcommerce');
?>
