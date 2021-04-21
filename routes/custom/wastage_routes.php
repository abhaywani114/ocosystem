<?php 
// Custom routes for Wastage 

Route::get('wastage-list', 'WastageController@showWastageListView')->name('wastage.list');
Route::post('wastagelistform', 'WastageController@Wastagelistform')->name('wastage.wastagelistform');
?>
