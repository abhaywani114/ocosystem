<?php

Route::resource('inventory', 'InventoryController');

Route::post('get-inventory', 'InventoryController@index')->
    name('inventory.ajax.index');
Route::get('stockreport/{doc_id}', 'InventoryController@showstockreport')->name('inventory.showstockreport');
Route::get('wastagereport/{doc_id}', 'InventoryController@showwastagereport')->name('inventory.wastagereport');

Route::post('get-inventory-barcode', 'InventoryController@barcodeIndex')->
    name('inventory.ajax.barcode');

Route::get('show-inventory-view', 'InventoryController@showInventoryView')->
    name('inventory.ajax.product');

Route::get('inventory-store', 'InventoryController@store')->
name('inventory.store');

Route::get('get-inventory-qty', 'InventoryController@getInventoryQty')->
    name('inventory.ajax.getqty');

Route::get('landing/show-inventoryqty-view/{product_id?}', 'InventoryController@showInventoryQtyView')->
    name('inventoryqty.ajax.product');

Route::post('show-inventory-edit-modal', 'InventoryController@showEditModal')->name('inventory.edit.modal');
Route::post('inventory_select_rack', 'InventoryController@selectRack')->name('inventory.select_rack');
Route::get('barcodeinventoryin/{id}/{location_id}', 'InventoryController@barcodeinventoryin');
Route::post('get_product_barcodes', 'InventoryController@get_product_barcodes')->name('barcode.get_product_barcodes');
Route::any('update_product_barcode_quantity', 'InventoryController@updateProductBarcodeQuantity')->name('inventory.update_product_barcode_quantity');

Route::get('landing/inventorycost/{id}', 'InventoryController@showInventoryCost');
Route::get('landing/product-inventory-cost/{id}', 'InventoryController@productInventoryCost')->name('inventory.ajax.productInventoryCost');


Route::get('landing/inventorybarcode/{id}', 'InventoryController@showInventoryBarcode');
Route::get('landing/inventoryqtydamage', 'InventoryController@showInventoryQtyDamage');
Route::get('landing/inventoryqtywastageform', 'InventoryController@showInventoryQtyWastageForm');
Route::get('landing/inventoryqtylocation', 'InventoryController@showInventoryQtyLocation');
Route::any('landing/showwastageform', 'InventoryController@showWastageForm')->name('inventory.show_wastageform');
Route::post('landing/inventorybarcode', 'InventoryController@showBarcodeTable')->name('barcode.table.show');
Route::post('landing/saveexpiry', 'InventoryController@saveExpiry')->name('save.expiry');
Route::post('landing/savefifo', 'InventoryController@saveFifo')->name('save.fifo');
Route::post('landing/barcode/create_from_input_range', 'InventoryController@createBarcodeFromInputRange')->name('barcode.create.from_input_range');
Route::post('landing/savebarcode', 'InventoryController@saveBarcode')->name('barcode.save');
Route::post('landing/deletebarcode', 'InventoryController@deleteBarcode')->name('barcode.delete');

Route::any('inventoryautoprocurement', 'InventoryController@showInventoryAutoProcurement')->name('inventory.inventoryautoprocurement');

Route::any('inventorystockin', 'InventoryController@showInventoryStockIn')->name('inventory.inventorystockin');

Route::any('get_location_product', 'InventoryController@get_location_product')->name('inventory.getlocationproduct');


Route::any('get_autoprocurement', 'InventoryController@get_autoprocurement')->name('inventory.get_autoprocurement');

Route::any('update_product_quantity_stock', 'InventoryController@updateProductQuantitystock')->name('inventory.update_product_quantity_stock');
Route::any('update_rack_product_quantity_stock', 'InventoryController@updateRackProductQuantitystock')->name('inventory.update_rack_product_quantity_stock');
Route::any('updatewastage', 'InventoryController@updatewastage')->name('inventory.updatewastage');
Route::get('inventorystockout', 'InventoryController@showInventoryStockOut');



Route::post('inventory-update_remark', 'InventoryController@update_remark')->name('inventory.update_remark');
Route::post('inventory-update_barcode_sku', 'InventoryController@update_barcode_sku')->name('inventory.update_barcode_sku');
Route::post('inventory-update_barcode_name', 'InventoryController@update_barcode_name')->name('inventory.update_barcode_name');
Route::post('inventory-update', 'InventoryController@update')->
name('inventory.update');

// mobile routes

Route::get('mob-inventory', 'MobInventoryController@Inventory');
Route::get('mob-inventory/stock-in', 'MobInventoryController@StockIn');
Route::get('mob-inventory/stock-out', 'MobInventoryController@StockOut');
Route::get('mob-inventory/product-inventory-form', 'MobInventoryController@ProductInventoryForm');
?>
