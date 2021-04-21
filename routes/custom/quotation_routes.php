<?php
/* Custom Quotation Routes */

Route::get('/quotation/{merchant_id}/{customer_id}', 'QuotationController@showQuotationView')->name('quotation.quotation');

Route::get('quotation-issued-list', 'QuotationController@showQuotationIssuedListView')->name('quotation.issued.list');
Route::get('quotation-received-list', 'QuotationController@showQuotationReceivedListView')->name('quotation.received.list');


?>
