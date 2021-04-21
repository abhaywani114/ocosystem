<?php
/* Custom Debit Note Routes */

Route::post('/savedebitnote', 'DebitNoteController@saveDebitNote')->name('debitnote.savedebitnote');
Route::get('/debitnote/{debitnote_id}', 'DebitNoteController@showDebitNoteView')->name('debitnote.debitnote');
Route::get('/debitnote/download/{debitnote_id}', 'DebitNoteController@pdfDebitNoteView')->name('debitnote.debitnotePdf');

Route::post('/debitnote-issued', 'DebitNoteController@DebitNoteIssuedList')->name('debitnote.issued');
Route::get('/debitnote-issued-list', 'DebitNoteController@showDebitNoteIssuedListView')->name('debitnote.issued.list');
Route::get('/debitnote-received-list', 'DebitNoteController@showDebitNoteReceivedListView')->name('debitnote.received.list');



?>
