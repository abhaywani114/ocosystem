<?php
/* Custom CRPT Segment Report by location Routes */
Route::get('crpt/segment_report/{company_id}', 'CRPTSegmentReportbyLocationController@showSegmentReport')->name('segment_report.ajax.index')->middleware('CheckRole:onlyuser');
?>