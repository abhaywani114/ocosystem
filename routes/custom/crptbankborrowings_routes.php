<?php
/* Custom CRPT Bank Borrowings Routes */
Route::get('crpt/bank_borrowings/{company_id}','CRPTBankBorrowingsController@showCRPT_bank_borrowings')->name('bank_borrowings.ajax.index');

?>
