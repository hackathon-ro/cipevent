<?php
require_once('../config.php');

//Save location updates
if(isset($_POST['location'])){
	$latitude  = mysql_real_escape_string($_POST['latitude']);
	$longitude = mysql_real_escape_string($_POST['longitude']);
	$id        = mysql_real_escape_string($_POST['location']);

	$query = 'UPDATE locations SET latitude = "%s", longitude = "%s" WHERE id = "%s" LIMIT 1';
	$query = sprintf($query, $latitude, $longitude, $id);
	mysql_query($query);
}

//Get data from events
$query = 'SELECT e.id, e.event_name, e.time_start, e.time_end, e.status, e.id_location, l.adress, l.latitude, l.longitude, l.city, l.location_name
			FROM events e
			LEFT JOIN locations l ON (e.id_location = l.id)';

$res = mysql_query($query);

$events = array();
while($row = mysql_fetch_array($res)){
	$events[] = $row;
}

require_once('admin.php');
?>