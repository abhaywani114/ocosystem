<?php

Route::get('/script/populate_opos_tablename', 'ScriptController@populate_opos_tablename');

Route::get('/script/create_takeaway_seq', 'ScriptController@create_takeaway_seq');
Route::get('/script/populate_takeaway_seq', 'ScriptController@populate_takeaway_seq');
Route::get('/script/populate_counter_seq', 'ScriptController@populate_counter_seq');
Route::get('/script/activate_me', 'ScriptController@activate_me');
?>
