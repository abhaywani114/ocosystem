<?php
/* Custom CRPT Provisions Routes */

Route::get('crpt/provisions/{company_id}','CRPTProvisionsController@showCRPT_provisions')->name('provisions.ajax.index')->middleware('CheckRole:onlyuser');

?>
