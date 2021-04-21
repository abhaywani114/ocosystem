<?php

Route::get('twoway_search_merchant/{id}','TwowayController@search');
Route::get('delete_twoway/{id}','TwowayController@delete_twoway');
Route::post('approve_twoway','TwowayController@approve');