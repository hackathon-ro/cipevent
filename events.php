<?php
require_once('config.php');
require_once('functions.php');

$now = time();
$latitude  = $_POST['latitude'];
$longitude = $_POST['longitude'];

if(is_numeric($latitude) && is_numeric($longitude)){
	//Get next events and run-time events
	$query =   'SELECT e.id, e.time_start, e.time_end, e.event_name, l.location_name, 
					(6378137 * acos( cos( radians("%s") ) * cos( radians( l.latitude ) ) * cos( radians( l.longitude ) - radians("%s") ) + sin( radians("%s") ) * sin( radians( l.latitude ) ) ) ) AS distance
					FROM events e 
					LEFT JOIN locations l on (e.id_location = l.id)
				WHERE
					(time_start > %d) OR 
					(time_start < %d AND time_end > %d) 
				ORDER BY distance ASC, time_start DESC
				LIMIT 10';

	$query = sprintf($query, $latitude, $longitude, $latitude, $now, $now, $now);
	$res = mysql_query($query);

	$events = array();
	while($row = mysql_fetch_array($res)){
		$row['time'] = niceTimeLeft($row['time_start'] - $now);
		$events[] = $row; 
	}

	echo json_encode($events[0]);
}else{
	echo '#Wrong params';
}


 
?>