<?php
/* Custom Product Routes */


Route::post('product-details-dialog','ProductController@dialog')->name('product.details.dialog');

Route::post('show-product-savepicture', 'ProductController@productSavePicture')->name('product.savePicture');

Route::post('del-product-pic',"ProductController@delPicture")->name('product.delPicture');




Route::post('update-product-editModel','ProductController@update')->
name('product.updatecustom');

Route::get('/products/{product_id}/{filename}','ProductController@productImage')->name('product.image');
Route::get('/products/{product_id}/thumb/{filename}','ProductController@productImageThumb')->name('product.imagethumb');
?>
