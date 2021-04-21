<?php
/* Custom Purchase Order Routes */
Route::get('/purchaseorder/{order_id}/{approve?}', 'PurchaseOrderController@showPurchaseOrderView')->name('purchaseorder.purchaseorder');

Route::get('/pdfPurchaseOrder/{order_id}', 'PurchaseOrderController@pdfPurchaseOrderDownload')->name('purchaseorder.pdfPurchaseOrder');

Route::get('/purchaseorder/do_invoice/{purchaseorder_systemid}/now', 'PurchaseOrderController@showPurchaseOrderDOInvoice')->name('purchaseorder.purchaseorder.do_invoice');

Route::get('/purchaseorder-issued-list', 'PurchaseOrderController@showPurchaseOrderIssuedView')->name('purchaseorder.purchaseorder');
Route::get('/purchaseorder-received-list', 'PurchaseOrderController@showPurchaseOrderRecievedView')->name('purchaseorder.purchaseorder');
Route::post('/purchaseorder-approve-po', 'PurchaseOrderController@approvePo')->name('purchaseorder.approvepo');

Route::get('/purchaseorderpdf/{order_id}', 'PurchaseOrderController@pdfPurchaseOrder')->name('purchaseorder.purchaseorder.pdf');
?>
