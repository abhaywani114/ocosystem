<?php
Route::post('/savecreditnote', 'CreditNoteController@saveCreditNote')->name('creditnote.savecreditnote');
Route::get('/creditnote/{creditnote_id}', 'CreditNoteController@showCreditNoteView')->name('creditnote.creditnote');
Route::get('/creditnote/download/{creditnote_id}', 'CreditNoteController@pdfCreditNoteView')->name('creditnote.creditnotePdf');

Route::get('/creditnote-issued-list', 'CreditNoteController@showCreditNoteIssuedListView')->name('creditnote.issued.list');

Route::post('/creditnote-issued', 'CreditNoteController@CreditNoteIssuedList')->name('creditnote.issued');

Route::get('/creditnote-received-list', 'CreditNoteController@showCreditNoteReceivedListView')->name('creditnote.received.list');
?>
