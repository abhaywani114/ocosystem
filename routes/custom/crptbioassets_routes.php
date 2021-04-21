<?php
/* Custom CRPT Bio Assets Routes */
Route::get('crpt/bio_assets/{company_id}','CRPTBioAssetsController@showCRPT_bio_assets')->name('bio_assets.ajax.index');

?>
