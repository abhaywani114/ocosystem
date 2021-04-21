<?php
    Route::get('platyPOS', 'PlatyPOSController@platyPOS');
    Route::get('platypos/mob_order', 'MobPlatyPOSOrderController@mobOrder');

    Route::get('platypos/mob_confirm_order', 'MobPlatyPOSOrderController@mobOrderConfirm');

    Route::get('platypos/mob_menu_split', 'MobPlatyPOSOrderController@mobMenu');
    Route::get('platypos/mob_menu_cancel', 'MobPlatyPOSOrderController@mobMain');
    Route::get('platypos/mob_product_show', 'MobPlatyPOSOrderController@mobSingleProduct');
    Route::get('platypos/mob_comfirmed-order', 'MobPlatyPOSOrderController@MobComfirmedOrder');

?>
