<?php
/* Custom CRPT Other Expenses Routes */
Route::get('crpt/intangible_assets/{company_id}','CRPTIntangibleAssetsController@showCRPT_intangible_assets')->name('intangible_assets.ajax.index');

?>