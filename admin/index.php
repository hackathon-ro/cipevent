<?php
require_once('../config.php');


$query = 'SELECT e.event_name, e.time_start, e.time_end, e.status, l.adress, l.latitude, l.longitude
			FROM events e
			LEFT JOIN locations l ON (e.id_location = l.id)';

$res = mysql_query($query);

$events = array();
while($row = mysql_fetch_array($res)){
	$events[] = $row;
}


require_once('admin.php');
?>