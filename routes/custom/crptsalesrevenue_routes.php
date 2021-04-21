<?php
/* Custom CRPT Sales Revenue Routes */
Route::get('crpt/sales_revenue/{company_id}', 'CRPTSalesRevenueController@showSalesRevenue')->name('sales_revenue.ajax.index')->middleware('CheckRole:onlyuser');
?>
