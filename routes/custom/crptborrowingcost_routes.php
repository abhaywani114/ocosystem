<?php
/* Custom CRPT Borrowing Costs Routes */
Route::get('crpt/borrowing_cost/{company_id}', 'CRPTBorrowingCostController@borrowingCost'); 
Route::get('crpt/list_of_short_term/{company_id}', 'CRPTListOfShortTermController@listOfShortTerm'); 

?>
