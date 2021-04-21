<?php

Route::get('retail-voucher-index', 'RetailVoucherController@index')->
        name('retailvoucher.ajax.index');

Route::get('retail-voucher-list/{id}', 'RetailVoucherController@voucherList')
        ->name('retailvoucher.ajax.voucherList');

Route::get('retail-voucher-list/retail-voucher-list-ledger/{id}', 'RetailVoucherController@voucherLedgerList')
    ->name('retailvoucher.ajax.voucherLedgerList');

Route::get('retail-voucher-guide', 'RetailVoucherController@guide')
        ->name('retailvoucher.ajax.guide');
?>
