<?php
/* Custom Invoice Routes */

Route::get('invoice/issued/{invoice_id}', 'InvoiceController@showIssuedInvoiceView')->name('invoice.issued');

Route::get('invoice/received/{invoice_id}', 'InvoiceController@showReceivedInvoiceView')->name('invoice.received');
Route::get('invoice/pdfInvoiceDownload/{invoice_id}', 'InvoiceController@pdfInvoiceDownload')->name('invoice.pdfInvoiceDownload');

Route::get('invoice/issued-list', 'InvoiceController@showInvoiceIssuedListView')->name('invoice.issued.list.view');
Route::get('invoice/received-list', 'InvoiceController@showInvoiceReceivedListView')->name('invoice.received.list.view');

Route::POST('invoice/create', 'InvoiceController@createInvoice')->name('invoice.create');

?>
