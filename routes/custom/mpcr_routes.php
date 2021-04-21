<?php
    Route::get('monthly-preventive-check-view', 'MPCRController@show_cpr')->name('mpcr_view');
    Route::get('monthly-preventive-check-reports', 'MPCRController@index')->name('cpr.ajax.index');
    Route::get('monthly-preventive-check-reports/{id}', 'MPCRController@mpcr_form')->name('mpcr.form');
?>