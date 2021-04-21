<?php
/* Custom CRPT Cost of Sale Routes */
Route::get('crpt/cost_of_sales/{company_id}', 'CRPTCostOfSaleController@showCostOfSale')->name('showCostOfSale.ajax.index')->middleware('CheckRole:onlyuser');
?>