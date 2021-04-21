<?php
/* Custom Product Special Routes */
Route::post('product_special-save','ProductController@store_product_special')->name('product_special.store');

Route::post('product_special-delete','ProductController@delete_product_special')->name('product_special.delete');
?>
