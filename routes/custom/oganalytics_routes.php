<?php
/* Custom Oil & Gas Analytics Routes */ 
Route::get('industry/pump-volume-graph', 'OilGasAnalyticsController@index');
Route::post('industry/load-pump-volume-graph', 'OilGasAnalyticsController@loadChartData')->
    name('load-graph.ajax.pumpvolume');
?>
