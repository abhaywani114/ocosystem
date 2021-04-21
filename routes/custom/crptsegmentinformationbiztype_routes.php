<?php
/* Custom CRPT Assets Pledged Routes */
Route::get('crpt/segment_info/{company_id}', 'CRPTSegmentInformationController@showSegmentInformation')->name('segment_info.ajax.index')->middleware('CheckRole:onlyuser');
?>