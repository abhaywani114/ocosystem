<?php
/* Custom Ageing Routes */

Route::get('show-ageing-view', 'AgeingController@ShowAgeingView')->name('landing.ajax.ageing');
Route::get('contra/{id}', 'AgeingController@ContraView')->name('contra_view');
Route::get('creditor_all/{id}', 'AgeingController@CreditorAllTransactions')->name('creditor_all_transactions');
Route::get('creditor_balance/{type}/{id}', 'AgeingController@CreditorBalance')->name('creditor_balance');
Route::get('creditor_details/{id}', 'AgeingController@CreditorDetails')->name('creditor_details');
Route::get('debtor_all/{id}', 'AgeingController@DebtorAllTransactions')->name('debtor_all_transactions');
Route::get('debtor_balance/{type}/{id}', 'AgeingController@DebtorBalance')->name('debtor_balance');
Route::get('debtor_details/{id}', 'AgeingController@DebtorDetails')->name('debtor_details');

//Datatable
Route::post('creditor_details/table', 'AgeingController@payable_details_table')->
	name('payable_details_table.datatable');

Route::post('receivable_details/table', 'AgeingController@receivable_details_table')->
	name('receivable_details_table.datatable');

Route::post('debtor_balance/table', 'AgeingController@DebtorBalanceTable')->
	name('debtor_balance.datatable');

Route::post('creditor_balance/table', 'AgeingController@CreditorBalanceTable')->
	name('creditor_balance.datatable');

Route::post('debtor_balance/newPayment', 'AgeingController@newPayment')->
	name('debtor_balance.payment.new');

Route::get('debtor_balance/deletePayment', 'AgeingController@deletePayment')->
	name('debtor_balance.payment.delete');

Route::get('ageing/receipt/{systemid}', 'AgeingController@ReceiptPayment')->
	name('receipt.payment');
Route::get('ageing/receiptPdf/{systemid}', 'AgeingController@ReceiptPaymentDownload')->
name('receipt.paymentPdf');

Route::get('ageing/receipt-vc/recieved_list', 'AgeingController@ReceiptPaymentRevList')->
	name('receipt.payment.rev_list');

Route::get('ageing/receipt-vc/issued_list', 'AgeingController@ReceiptPaymentIssueList')->
	name('receipt.payment.issue_list');
?>
