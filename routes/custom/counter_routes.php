<?php
Route::get('counter-get-data', 'CounterController@index')->name('counter.index');
Route::get('counter-create/{terminal_id}', 'CounterController@create')->name('counter.create');

Route::post('show-counter-edit-modal', 'CounterController@showEditModal')->name('counter.edit.modal');

Route::post('counter-update', 'CounterController@update')->name('counter.update');

Route::delete('counter-destroy/{id}', 'CounterController@destroy')->name('counter.destroy');

Route::get('counter-cat-get-data/{id}', 'CounterController@catData')->name('counter.cat_data');
?>