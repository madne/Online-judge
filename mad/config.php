<?php 
$url = 'localhost';
$admin_user_name = 'root';
$pwd = '';
$database_name = 'myDatabase1';



//adding busy times to display
function reserve($date,$start_hour,$end_hour){
echo "timetable.addEvent('.','$date',new Date(2000,10,10,$start_hour), new Date(2000,10,10,$end_hour), { url: '#' });";    
}

function convert_date($date){
	//reformats input date
	$str = 'In My Cart : 11 12 items';
	preg_match_all('!\d+!', $date, $matches);
	$ret = $matches[0][2] . '-' . $matches[0][0]. '-' . $matches[0][1];
	return $ret;
}


?>