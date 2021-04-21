<?php
/* Custom Production Routes */

Route::get('show-production-view', 'ProductionController@showProduction')->name('landing.ajax.production');
Route::get('bom/{product_id}', 'ProductionController@showProductionBom');
?>
