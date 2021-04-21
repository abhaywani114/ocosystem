<?php
/* Custom PickingList Routes */
Route::get('pickinglist-view','PickingListController@showPickingView')->name('pickinglist.pickinglist');
Route::get('picking-list', 'PickingListController@showPickingListView')->name('picking.list');

?>
