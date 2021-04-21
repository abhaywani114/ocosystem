<?php
Route::get('analytics/companies/', 'MobAnalyticsController@company');
Route::get('analytics/company/branch', 'MobAnalyticsController@branch');
Route::get('analytics/company/summary', 'MobAnalyticsController@companySummary');
Route::get('analytics/', 'MobAnalyticsController@analytic');