<?php
/* Custom CRPT Other Expenses Routes */
Route::get('crpt/inventories/{company_id}','CRPTInventoriesController@showCRPT_inventories')->name('inventories.ajax.index');

?>