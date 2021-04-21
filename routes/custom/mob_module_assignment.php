<?php
Route::get('/merchant/module_assignment/landing/{id}','ModuleAssignmentController@landing')->name('merchant.module.landing');
Route::post('/merchant/module_assignment/load_table',"ModuleAssignmentController@load_table")->name('merchant.module.load_table');
Route::post('/merchant/module_assignment/toggle_rule',"ModuleAssignmentController@toggle_rule")->name('merchant.module.toggle_rule');
