<?php
/* Custom Analytics Routes */

Route::get('show-cash-productsales-view','AnalyticsController@showCashProductSalesView')->name('analytics.ajax.cash.productsales');

Route::get('show-cash-cashiersales-view','AnalyticsController@showCashCashierSalesView')->name('analytics.ajax.cash.cashiersales');

Route::get('show-cash-staffsales-view','AnalyticsController@showCashStaffSalesView')->name('analytics.ajax.cash.staffsales');
Route::get('download-cash-staffsales-pdf','AnalyticsController@cashStaffSalesPdf')->name('analytics.cashStaffsalesPdf');

Route::get('show-cash-branchsales-view','AnalyticsController@showCashBranchSalesView')->name('analytics.ajax.cash.branchsales');
Route::get('download-cash-branchsales-pdf','AnalyticsController@branchSalesPdf')->name('analytics.cash.branchsalesPdf');

Route::get('show-ov-merchantsales-view','AnalyticsController@showOperativeViewMerchantSalesView')->name('analytics.ajax.ov.merchantsales');

Route::get('show-ov-overallproductsales-view','AnalyticsController@showOperativeViewOverallProductSalesView')->name('analytics.ajax.ov.overallproductsales');

Route::get('show-ov-foodcourthourlysales-view','AnalyticsController@showOperativeViewFoodCourtHourlySalesView')->name('analytics.ajax.ov.foodcourthourlysales');

Route::get('show-cash-hourlysales-view','AnalyticsController@showCashHourlySalesView')->name('analytics.ajax.cash.hourlysales');

Route::get('show-cash-monthlyprocured-view','AnalyticsController@monthlyProcuredView')->name('analytics.ajax.cash.monthlyProcured');

Route::get('show-cash-paymentmode-view','AnalyticsController@showCashPaymentModeView')->name('analytics.ajax.cash.paymentmode');

Route::get('show-cash-paymentmode-filtered','AnalyticsController@showCashPaymentModeFiltered')->name('analytics.ajax.cash.paymentmodeFiltered');

Route::get('show-cash-productsalesqty-view','AnalyticsController@showCashProductSalesQtyView')->name('analytics.ajax.cash.productsalesqty');

Route::get('show-credit-productsales-view','AnalyticsController@showCreditProductSalesView')->name('analytics.ajax.credit.productsales');

Route::get('show-credit-staffsales-view','AnalyticsController@showCreditStaffSalesView')->name('analytics.ajax.credit.staffsales');

Route::get('show-cash-SalesMonthlyStatement-view','AnalyticsController@showCashSalesMonthlyStatementView')->name('analytics.ajax.cash.monthlysales');

Route::get('show-cash-dummySalesMonthlyStatement-view','AnalyticsController@dummy')->name('dummy.monthlysales');

Route::get('show-stock-productsalesqty-view','AnalyticsController@showStockProductSalesQtyView')->name('analytics.ajax.stock.productsalesqty');
Route::get('download-stocklevel-pdf','AnalyticsController@downloadStocklevelPdf')->name('analytics.productsalesqtyPdf');

//download pdf for Product Sales 
Route::post('product-sales-pdf','AnalyticsController@productSalesPdf')->name('analytics.ajax.cash.pdf.productsales');

//download pdf for Product Sales By Quantity  
Route::post('product-sales-qty-pdf','AnalyticsController@productSalesQtyPdf')->name('analytics.ajax.cash.pdf.productsalesqty');

//download pdf for Product Sales By Quantity  
Route::post('product-stock-qty-pdf','AnalyticsController@productStockQtyPdf')->name('analytics.ajax.stock.productsalesqtypdf');


Route::get('show-Cash-Product-Sales-View-DownloadPDF', 'AnalyticsController@showCashProductSalesViewDownloadPDF')->name('showCashProductSalesViewDownloadPDF');

Route::get('/show-cash-productsalesqty-view-DownloadPDF', 'AnalyticsController@showCashProductSalesViewDownloadPDF')->name('show-cash-productsalesqty-view-dddPDF');

Route::get('show-job-duration-management', 'AnalyticsController@job_duration_mgmt')->name('job_duration_mgmt');

Route::get('show-job-duration-management-update-sla', 'AnalyticsController@job_duration_mgmt_update_sla')->name('job_duration_mgmt_update_sla');

Route::get('monthlySalesStatement','AnalyticsController@monthlySalesStatement')->name('export.monthlySales');
Route::get('download-job-duration-management-pdf', 'AnalyticsController@job_duration_pdf')->name('analytics.job_duration_pdf');

?>
