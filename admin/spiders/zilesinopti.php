<?php
require_once('../../config.php');

$url = 'http://bucuresti.zilesinopti.ro/evenimente.html';

$data = file_get_contents($url);
$data = str_replace("\r\n", '', $data);
$data = str_replace("\n", '', $data);
$data = str_replace("\t", '', $data);

preg_match_all('/<article>.*?<h2>.*?<a.*?>(.*?)<\/a>.*?<ul class="schedule">.*?<li>.*?<a.*?>(.*?)<\/a>.*?<time>(.*?)<\/time>/', $data, $matches);
//echo '<pre>'.print_r($matches).'</pre>';

$number = count($matches[1]);

for($i=0; $i<$number; $i++){
	$event_name       = mysql_real_escape_string(strip_tags($matches[1][$i]));
	$location_name    = mysql_real_escape_string(strip_tags($matches[2][$i]));
	$start_date_str	  = date('d-m-y').' '.strip_tags($matches[3][$i]);
	$event_time_start = strtotime($start_date_str);
	$event_time_end   = $event_time_start + 7200; // + 2 hours

	$query = 'INSERT INTO locations (location_name) VALUES ("%s")';
	$query = sprintf($query, $location_name);

	if(mysql_query($query)){
		$id  = mysql_insert_id();
		$query = 'INSERT INTO events (event_name, id_location, time_start, time_end) VALUES("%s", "%d", "%d", "%d")';
		$query = sprintf($query, $event_name, $id, $event_time_start, $event_time_end);
		mysql_query($query);	
	}
}
?>