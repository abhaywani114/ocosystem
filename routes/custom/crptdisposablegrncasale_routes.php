<?php
/* Custom CRPT Disposable GR/NCA Sale Routes */

Route::get('crpt/disposable_grnca_sale/{company_id}', 'CRPTDisposableGRNCASaleController@showDisposableGRNCASaleView')->name('crpt.disposablegrncasale.index');

?>
