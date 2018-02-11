<?php 
// This function get the difference between two dates in days, hours, minutes, seconds
// date2 > date1
// date2, date1 in this form "YYYY-MM-DD" or "YYYY/MM/DD"

function diff_dates($date1, $date2){
	$date2 = strtotime($date2);
	$date1 = strtotime($date1);

	$diff = $date2 - $date1;
	$result =  'Seconds: '. floor($diff). "<br />";
	$result .=  'Minutes: '. floor($diff / (60 )). "<br />";
	$result .=  'Hours: '. floor($diff / (60 * 60 )). "<br />";
	$result .=  'Days: '. floor($diff / (60 * 60 * 24)). "<br />";
	return $result;
}
echo diff_dates('2010-02-01', '2020-03-01')
 ?>