<?php
/* Custom HCAP Scheduler Routes */
Route::get('show-sheduler-view', 'HcapSchedulerController@showshedulerView')->
	name('hcapscheduler.ajax.scheduler')->middleware('CheckRole:onlyuser');
?>
