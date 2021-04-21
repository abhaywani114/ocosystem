<?php
/* Custom Data Routes */
Route::get('show-supplier-view','DataController@showSupplierView')->name('data.ajax.supplier');

Route::get('get-supplier-data', 'DataController@getSupplierData')->name('data.ajax.getSupplierData');

Route::get('show-dealer-view','DataController@showDealerView')->name('data.ajax.dealer');
Route::get('get-dealer-data', 'DataController@getDealerData')->name('data.ajax.getDealerData');

Route::get('documentinventorycost/{id}','DataController@showDocumentInventoryCostView');

Route::get('documentsupplier/{id}','DataController@showDocumentSupplierView');
Route::get('documentdealer/{id}','DataController@showDocumentDealerView');

Route::get('view-document-inventory-cost/{id}', 'DataController@viewDocumentInventoryCost');

Route::post('save-inventory-cost', 'DataController@saveInventoryCost')->name('data.ajax.saveInventoryCost');
Route::post('deletetwowaylinking', 'DataController@delMerchantTwoWayLinking')->name('data.ajax.delMerchantTwoWayLinking');
Route::post('savemerchantlinkrelation', 'DataController@saveMerchantLinkRelation')->name('data.ajax.saveMerchantLinkRelation');

Route::post('saveMerchantOneway', 'DataController@saveMerchantOneway')->name('data.ajax.saveMerchantOneway');

Route::post('saveOneWayRelation', 'DataController@saveOneWayRelation')->name('data.ajax.saveOnewayRelation');
Route::post('changeOnewayRelationStatus', 'DataController@changeOnewayRelationStatus')->name('data.ajax.changeOnewayRelationStatus');
Route::post('delMerchantOnyWay', 'DataController@delMerchantOnyWay')->name('data.ajax.delMerchantOnyWay');
Route::post('dm-save-default-location', 'DataController@saveMerchantDefaultLocation')->name('data.ajax.saveMerchantDefaultLocation');
Route::get('get-one-way-merchant-data/{id}', 'DataController@getOwnwayMerchantData');

Route::post('price-modal-inventory-products', 'DataController@showInventoryPriceRange')->name('price.modal.inventory.products');




Route::post('deactivate-twoway-merchant-link', 'DataController@deactivateMerchantLinkRelation')->name('data.ajax.deactivateMerchantLinkRelation');
Route::post('activate-twoway-merchant-link', 'DataController@activateMerchantLinkRelation')->name('data.ajax.activateMerchantLinkRelation');


Route::get('dm/consignment', 'DataController@showConsignmentView')->name('data.ajax.showConsignment');;
Route::post('save-merchant-credit-limit', 'DataController@saveMerchantCreditLimit')->name('data.ajax.saveMerchantCreditLimit');


Route::post('savemerchanttwowaylinking', 'DataController@saveMerchantTwoWayLinking')->name('data.ajax.saveMerchantTwoWayLinking');


Route::get('documentinventorycost','DataController@showDocumentInventoryCostView');

Route::post('documentinventorycostdata','DataController@showDocumentInventoryCostLoadData')
->name('data.ajax.loadinventorydata');
Route::get('tracking-report/{id}','DataController@showDocumenttrackingView');
Route::get('data/get-locations', 'DataController@getLocations')->name('datamg.ajax.getLocations');
Route::get('tracking-report-confirm/{id}','DataController@showDocumenttrackingConfirmView');
Route::get('dm/get-merchant-location/{id}', 'DataController@getMerchantLocations');

Route::get('dm/franchise-management', 'FranchiseController@showFranchiseManagement')->name('data.ajax.franchiseManagement');
Route::get('dm/franchise-list/{id}', 'FranchiseController@showFranchiseList')->name('data.ajax.franchiseList');
Route::get('dm/franchise-terminal-list', 'FranchiseController@showFranchiseTerminalList')->name('data.ajax.franchiseList');


Route::post('dm/save-franchise', 'FranchiseController@saveFranchise')->name('data.ajax.saveFranchise');
Route::get('dm/get-franchise-merchants/{id}', 'FranchiseController@getFranchiseMerchants')->name('data.ajax.FranchiseMerchants');
Route::get('dm/franchise-products/{id}', 'FranchiseController@getFranchiseProducts')->name('data.ajax.FranchiseProducts');

Route::post('dm/get-franchise-management-list', 'FranchiseController@getFranchiseManagementList')->name('data.ajax.franchiseManagementList');

Route::post('dm/franchise-management-dialog', 'FranchiseController@getFranchiseManagementDetail')->name('franchise.details.dialog');

Route::post('dm/franchise-management-update', 'FranchiseController@updateFranchiseManagementDetail')->name('data.ajax.franchiseUpdate');

Route::post('dm/franchise-management-edit', 'FranchiseController@getfranchiseManagmentModel')->name('franchiseManagment.edit.modal');
Route::post('dm/franchise-terminal-edit', 'FranchiseController@getfranchiseTerminalModel')->name('franchiseTerminal.edit.modal');

Route::post('dm/destory-franchise-management/{id}', 'FranchiseController@destoryFranchiseManagement')->name('data.ajax.destoryFranchiseManagement');
Route::post('dm/destory-franchise-terminal/{id}', 'FranchiseController@destoryFranchiseTerminal')->name('data.ajax.destoryFranchiseTerminal');

Route::post('dm/save-franchise-merchant-location', 'FranchiseController@saveFranchiseMerchantLocation')->name('data.ajax.saveFranchiseMerchantLocation');
Route::get('dm/get-locations', 'FranchiseController@getLocations')->name('data.ajax.getLocations');


Route::post('dm-get-franchise-royalty', 'FranchiseController@getFranchiseRoyalty')->name('data.ajax.getFranchiseRoyalty');
Route::post('dm-update-franchise-merchant', 'FranchiseController@updateFranchiseMerchant')->name('data.ajax.updateFranchiseMerchant');
Route::post('dm/save-merchant-location', 'FranchiseController@saveMerchantLocation')->name('data.ajax.saveMerchantLocation');
Route::post('dm/get-franchisee-terminal-list', 'FranchiseController@saveFranchiseeTerminalList')->name('data.ajax.saveFranchiseeTerminalList');

Route::get('dm/get-terminal-locations', 'FranchiseController@getTerminalLocations')->name('data.ajax.getTerminalLocations');
Route::get('dm/get-franchiess-terminal-list', 'FranchiseController@getFranchiseeTerminalList')->name('data.ajax.getFranchiseeTerminalList');
Route::get('dm/get-locationqty/{location_id}', 'DataController@getLocationqty')->name('data.ajax.getLocationsqty');
Route::post('dm/remove-merchant-location', 'FranchiseController@removeMerchantLocation')->name('data.ajax.removeMerchantLocation');
Route::post('save_unconfirmed_data','DataController@save_unconfirmed_data')
    ->name('data.save_unconfirmed_data');

Route::post('save_received_report_data','DataController@save_received_report_data')
    ->name('data.save_received_report_data');
    
Route::get('/dm-consignment/{m_id}','DataController@showConsignmentView')->name('supplier.consignment');

Route::post('save-po', 'DataController@savePo')->name('data.savepo');
Route::post('void-dm-document', 'DataController@voidDocument')->name('void.docuemnt');

//Franchise group here
Route::post('/franchise/product/get_table','FranchiseController@get_product')->name('franchise.get_product');
Route::post('/franchise/product/inventory_price','FranchiseController@set_product_price')->name('franchise.set_product_price');
Route::post('/franchise/product/toggle_active', 'FranchiseController@toggle_product_active')->name('franchise.toggle_product_active');
Route::get('/franchise/product/location_price/{terminal_id}', 'FranchiseController@location_price')->name('franchise.location_price');
Route::post('/franchise/product/location_price/locationPriceTable', 'FranchiseController@locationPriceTable')->name('franchise.location_price.table');
Route::post('/franchise/product/location_price/updatefield', 'FranchiseController@locationPriceUpdate')->name('franchise.location_price.update');
Route::post('/franchise/product/location_price/toggleAll', 'FranchiseController@locationPriceToggleAll')->name('franchise.location_price.toggle_all');


Route::post('CreditActTransfer', 'CreditActController@CreditActTransfer');

?>
