<?php
/* Custom CRPT Assets Pledged Routes */
Route::get('crpt/assets_pledged/{company_id}', 'CRPTAssetsPledgedController@showAssetsPledged')->name('assest.ajax.pledged')->middleware('CheckRole:onlyuser');
?>