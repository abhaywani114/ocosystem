<?php 
/* Custom OPOSsum Screen E Routes */
Route::get('screen_e/{location_id}','OposScreenEController@index')->name('screen_e.landing');
Route::get('screen_e/product-ids','OposScreenEController@get_product_ids')->name('screen_e.product_ids');
Route::get('screen_e-product-ids','OposScreenEController@get_product_ids')->name('screen_e.product_ids');

?>
