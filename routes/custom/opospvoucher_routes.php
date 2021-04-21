<?php
	/* Custom routes for Paper Voucher */

	Route::post('opospvoucher/create',
		'OposPaperVoucherController@create')->
		name('opospvoucher.ajax.create');

	Route::get('opospvoucher/view/{id}',
		'OposPaperVoucherController@get')->
		name('opospvoucher.ajax.get');
?>
