<?php
/* Custom CRPT Other Expenses Routes */
Route::get('crpt/goodwill/{company_id}','CRPTGoodwillController@showCRPT_goodwill')->name('goodwill.ajax.index');
?>