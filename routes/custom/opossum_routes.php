<?php
/* Custom OPOSsum Routes */

Route::resource("terminal",'OpossumController');

Route::get('get-opossum', 'OpossumController@openOpsum')->name('landing.ajax.opossum');

Route::post('get-licencekey-terminal', 'OpossumController@generateLicenseKey')->name('landing.ajax.opossum.lic_terminal');

Route::get('get-dingo', 'OpossumController@openDingo')->name('landing.ajax.dingo');

Route::get('opossum/terminal/{id}', 'OpossumController@opossum');

Route::get('oposum/promo-definition', 'OpossumController@promoDefinition');
Route::post('oposum/store-promo-definition', 'OpossumController@storePromoDefinition')->name('opossum.ajax.storePromoDefinition');
Route::post('oposum/save-promo-picture', 'OpossumController@savePromoPicture')->name('opossum.ajax.savePromoPicture');
Route::post('oposum/del-promo-picture', 'OpossumController@delPromoPicture')->name('opossum.ajax.delPromoPicture');
Route::get('oposum/promo-picture/{id}/{fileName}', 'OpossumController@promoPicture');

Route::get('terminal-exist/{id}', 'OpossumController@terminalExists');
Route::get('terminal-id-exist/{id}', 'OpossumController@terminalIdExists');
 

Route::get('oposum/opossum-promo', 'OpossumController@opossumPromo');

Route::get('/dm/franchise/promo', 'OpossumController@opossumPromoFranchiseeLanding')->
	name('promo.bundle_List.FranchiseeLanding');

Route::get('oposum/get-opossum-promo-data', 'OpossumController@getPromoBundles')->name('opossum.ajax.promoBundles');
Route::post('opossum/delete-promo-bundle', 'OpossumController@delPromoBundle')->name('opossum.ajax.delPromoBundle');
Route::post('opossum/check-delete-promo-bundle', 'OpossumController@checkdelPromoBundle')->name('opossum.ajax.checkdelPromoBundle');

Route::post('opossum/opossum-location-promo', 'OpossumController@getLocationPromos')->name('opossum.ajax.locationPromos');

Route::post('oposum/get-promo-products', 'OpossumController@promoProducts')->name('opossum.ajax.promoProducts');
Route::post('oposum/save-promo-locations', 'OpossumController@savePromoLocations')->name('opossum.ajax.savePromoLocations');


Route::get('oposum/get-locations', 'OpossumController@getLocations')->name('opossum.ajax.getLocations');



Route::post('get-opossum-data','OpossumController@index')->
    name('data.opossum');
	
Route::get('opossum/Pricetag/{id}','PricetagController@GetPriceTagtable')->name('opossum.GetPriceTagtable');

Route::post('opossum/price-tag-submit/','PricetagController@PriceTagSubmit')->name('opossum.PriceTagSubmit');

Route::get('opossum/pricetag/popup/','PricetagController@PriceTagPrintPopUp')->name('opossum.PriceTagPrintPopUp');

Route::get('opossum/counter/{id}', 'OpossumController@opossumCounter');

Route::get('opossum/wastage', 'OpossumController@wastage')->name('opossum.wastage');

Route::post('opossum-newdialog','OpossumController@newDialog')->
    name('terminal.newdialog');

Route::post('show-terminal-editModel','OpossumController@showEditModel')->
name('terminal.showEditModal');


Route::post('update-terminal-editModel','OpossumController@update')->
name('terminal.updatecustom');

Route::get('opossum/product', 'OpossumController@opossumproduct');

Route::get('opossum/opossumtest/{id}', 'OpossumController@opossumtest');

Route::post('opossum-opencode','OpossumController@opencode')->
name('opossum.dialog.opencode');

Route::post('opossum-table-opencode','OpossumController@opencode_table')->
name('opossum.table.code');
 
Route::post('opossum-getproduct-opencode','OpossumController@opencode_getproduct')->
name('opossum.dialog.getProduct');

Route::get('opossum-stockin/{id}','OpossumController@stockin')->
name('opossum.dialog.stockin');

Route::get('opossum-productRedumption','OpossumController@productRedumption');

Route::get('opossum-stockout/{id}','OpossumController@stockout')->
name('opossum.dialog.stockout');

Route::post('opossum/opossumdynamictable', 'OpossumController@opossumdynamictable');

Route::post('opossum/opossumskip', 'OpossumController@opossumSkip');


Route::get('opossum/loadproduct', 'OpossumController@loadProductFScreenD');

Route::get('opossum/opossumpreference/{id}', 'OpossumController@showPreference')->name('opossum.dialog.preference');
Route::post('opossum-preference-status', 'OpossumController@change_preference_status')->name('opossum.preference_status');
Route::post('opossum-preference-priceKeyin', 'OpossumController@change_preference_priceKeyin')->name('opossum.preference_priceKeyin');

Route::get('opossum/oposwastage', 'OpossumController@opossumWastage');

Route::get('opossum-pending','OpossumController@pending')->
name('opossum.dialog.pending');
Route::post('opossum/terminal/table/showReserve','PlatSplitCombineReserveController@showReserve')->
name('opossum.show.reserve');
Route::post('opossum/terminal/table/split', 'PlatSplitCombineReserveController@splitTable')->
name('table.split');
Route::post('opossum/terminal/table/reserve', 'PlatSplitCombineReserveController@reserveTable')->
name('table.reserve');
Route::post('opossum/terminal/table/cancel', 'PlatSplitCombineReserveController@cancelTable')->
name('opossum.table.cancel');
Route::post('opossum/terminal/table/delete/reserve', 'PlatSplitCombineReserveController@deleteReserveTable')->
name('table.delete.reserve');
Route::post('opossum/terminal/table/combine', 'PlatSplitCombineReserveController@combineTable')->
name('table.combine');
Route::get('opossum/terminal/table/show_combine_modal/{terminal_id}', 'PlatSplitCombineReserveController@showCombineTable')->
name('table.show_combine_modal');
Route::get('opossum/terminal/table/show_reserve_modal/{tableNumber}', 'PlatSplitCombineReserveController@showReserveTable')->
name('table.show_reserve_modal');
Route::post('opossum/terminal/table/add', 'OpossumController@addTable')->
name('opossum.table.add');
Route::post('opossum/terminal/skip/add', 'OpossumController@addSkip')->
name('opossum.skip.add');
Route::post('opossum/terminal/table/fetch', 'OpossumController@fetchTable')->
name('opossum.table.fetch');
Route::post('opossum/terminal/skip/fetch', 'OpossumController@fetchSkip')->
name('opossum.skip.fetch');
Route::post('opossum/terminal/delete/special', 'OpossumController@deleteSpecial')->
name('opossum.delete.special');
Route::post('opossum/terminal/delete/special/skip', 'OpossumController@deleteSkipSpecial')->
name('opossum.delete.special.skip');
Route::post('opossum/opossummanual', 'OpossumController@opossumManual');

Route::post('opossum/opossumfilter', 'OpossumController@opossumFilter');

Route::post('opossum-filter_subcat','OpossumController@opossum_filter_subcat')
->name('opossum.filter_subcat');

Route::post('opossum-filter_product','OpossumController@opossum_filter_product')
->name('opossum.filter_product');

Route::get('opossum/{terminal_id}/opos_tablename', 'OpossumController@opos_tablename');

Route::post('opossum-opos_tablename_list', 'OpossumController@opos_tablename_list')->name('opossum.opos_tablename_list');

Route::post('opossum-opos_change_tablename', 'OpossumController@change_tablename')->name('opossum.opos_change_tablename');

Route::get('opossum/itemised-report/{terminal_id}', 'OpossumController@itemisedReport');
Route::post('opossum/get_itemised_table', 'OpossumController@get_itemised_table')->name('opossum.get_itemised_table');
Route::post('opossum-product-barcodes','OpossumController@opossum_product_fetch_barcodes')->name('opossum.product_barcodes');
Route::post('opossum/scan-barcode','OpossumController@opossum_product_fetch_barcodes_new')->name('opossum.product_barcodes_new');


Route::post('opossum-super_search','OpossumController@super_search')
    ->name('opossum.super_search');

Route::post('opossum-show_search','OpossumController@show_search')
    ->name('opossum.show_search');

Route::post('opossum-save_currency','OpossumController@save_currency')
    ->name('opossum.save_currency');

Route::post('opossum-show-payment-receipt','OposComponentController@showPaymentReceipt')
    ->name('opossum.show_payment_receipt');


Route::get('/landing/opos_qtydamage/{branch}', 'InventoryController@showInventoryQtyDamage_opossum')->
	name('wastage_opossum');

Route::get('/landing/opos_qtywastageform/{branch}', 'InventoryController@showInventoryQtyWastageForm_oposum')->
	name('wastageform_oposum');

?>
