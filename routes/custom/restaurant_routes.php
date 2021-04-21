<?php

Route::post('get-restaurantnservices', 'RestaurantController@index')->
    name('restaurantnservices.ajax.index');
    
Route::get('show-restaurantnservices-view', 'RestaurantController@showRestaurantView')->
    name('restaurantnservices.ajax.product');
    
Route::get('restaurantnservices-store', 'RestaurantController@store')->
name('restaurantnservices.store');

Route::delete('restaurantnservices/{id}/del', 'RestaurantController@destroy')->
name('restaurantnservices.destroy');

Route::post('show-restaurantnservices-edit-modal', 'RestaurantController@showEditModal')->name('restaurantnservices.edit.modal');

Route::post('restaurantnservices-update', 'RestaurantController@update')->
name('restaurantnservices.update');




?>
