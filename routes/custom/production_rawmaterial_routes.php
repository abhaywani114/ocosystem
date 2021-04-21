<?php
/* Custom Production Routes */
Route::get('ledger/{id}', 'ProductionRawMaterialController@showProductionLedger');

Route::get('prdrawmaterialstockin', 'ProductionRawMaterialController@showPrdRMStockIn');
Route::get('prdrawmaterialstockout', 'ProductionRawMaterialController@showPrdRMStockOut');

?>
