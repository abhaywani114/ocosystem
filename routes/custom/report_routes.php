<?php
/* Custom Report Routes */
Route::get('show-dar-view','ReportController@show_dar_view')->
	name('report.ajax.dar');
Route::get('show-car-view','ReportController@show_car_view')->
	name('report.ajax.car');
?>
