<?php
/* Custom CRPT Segment Result By Biz Type Routes */
Route::get('crpt/segment_results/{company_id}', 'CRPTSegmentResultBizTypeController@showSegmentResult')->name('segment_type.ajax.index')->middleware('CheckRole:onlyuser');
?>