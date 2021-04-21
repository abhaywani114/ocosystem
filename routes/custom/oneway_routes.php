<?php

Route::post('save_oneway','OnewayController@save');
Route::post('update_oneway','OnewayController@update');
Route::get('fetch_details/{id}','OnewayController@fetch_details');
Route::get('delete_oneway/{id}','OnewayController@delete_oneway');
Route::post('fetch_credit_limit','OnewayController@fetch_credit_limit');
Route::post('update_credit_limit','OnewayController@update_credit_limit');
Route::post('update_oneway_status','OnewayController@update_status');