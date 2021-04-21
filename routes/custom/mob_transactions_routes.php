<?php
Route::get('/transactions', 'MobTransactionsController@transactionsList');
Route::get('/transactions/delivery-order', 'MobTransactionsController@deliveryOrder');