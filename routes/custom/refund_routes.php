<?php
	/* Custom routes for Refund */ 
	Route::get('opossum/refund/{id}', 'RefundController@opossumRefund');
	Route::post('opossum/quickrefund', 'RefundController@quickrefund')->name("opossum.quick_refund");
	Route::post('get_refund_edit_data', 'RefundController@getRefundData')->name('opossum.get_refund_edit_data');
	Route::post('opossum/update_refund', 'RefundController@updateRefund')->name("opossum.updaterefund");
	Route::put('opossum/update_refund', 'RefundController@updateRefundEdit')->name("opossum.updaterefund.edit");
?>
