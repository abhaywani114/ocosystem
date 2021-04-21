<?php 
// Custom routes for ATG & Probes
Route::prefix('pts2')->name('pts2.')->group(function () {

    Route::get('get-probes-configurations', 'ATGController@getProbesConfigurations')->name('getProbesConfigurations');

    Route::post('set-probes-configurations', 'ATGController@setProbesConfigurations')->name('setProbesConfigurations');

    Route::get('get-tanks-configurations', 'ATGController@getTanksConfigurations')->name('getTanksConfigurations');

    Route::post('set-tanks-configurations', 'ATGController@setTanksConfigurations')->name('setTanksConfigurations');

    Route::get('probe-get-measurements', 'ATGController@probeGetMeasurements')->name('probeGetMeasurements');

    Route::get('probe-get-tank-volume-height', 'ATGController@probeGetTankVolumeHeight')->name('probeGetTankVolumeHeight');

});

?>
