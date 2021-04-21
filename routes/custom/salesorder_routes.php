<?php
/* Custom Sales Order Routes */
Route::get('salesorder/{order_id}', 'SalesOrderController@showSalesOrderView')->name('salesorder.salesorder');
Route::get('salesorderPdf/{order_id}', 'SalesOrderController@pdfSalesOrder')->name('salesorder.pdfSalesOrder');
Route::post('salesorder/save', 'SalesOrderController@saveSalesOrder')->name('salesorder.savesalesorder');
Route::get('salesorder-issued-list', 'SalesOrderController@showSalesOrderIssuedView')->name('salesorder.issued');
Route::get('salesorder/{salesorder_systemid}/invoice_do','SalesOrderController@showSalesOrderInvoiceDO')->name('salesorder.salesorder.invoice_do');
?>

