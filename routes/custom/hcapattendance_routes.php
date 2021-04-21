<?php
/* Custom HCAP Attendance Routes */
Route::get('show-report-table-view', 'HcapAttendanceController@showAttendanceReportTableView')->
	name('hcapattendance.ajax.attendance')->middleware('CheckRole:onlyuser');

Route::get('show-day-attendance', 'HcapAttendanceController@showAttendanceDayReportTableView')->
	name('hcapattendance.attendance_view')->middleware('CheckRole:onlyuser');
?>
