<?php
	// Custom Routes for Mobile Virtual Cabinet
    Route::get('mobile-virtual-cabinet', 'MobVirtualCabinetController@virtual_cabinet')->name('mobile.virtual_cabinet');
    Route::get('mobile-virtual-cabinet-get', 'MobVirtualCabinetController@virtual_cabinet_get')->name('mobile.virtual_cabinet.get');
    Route::get('mobile-virtual-cabinet-eod/{id}', 'MobVirtualCabinetController@virtual_cabinet_eod')->name('mobile.virtual_cabinet_eod');
    Route::get('mobile-virtual-cabinet-eod-shift/{id}/{index}', 'MobVirtualCabinetController@virtual_cabinet_eod_shift')->name('mobile.virtual_cabinet_eod_shift');
?>
