<?php
require_once('../../config.php');

$url = 'http://metropotam.ro/evenimente/';

$data = file_get_contents($url);
$data = str_replace("\r\n", '', $data);
$data = str_replace("\n", '', $data);
$data = str_replace("\t", '', $data);

preg_match_all('/<h2>.*?<a.*?>.*?<span itemprop="name">(.*?)<\/span>.*?<time itemprop="startDate".*?>(.*?)<\/time>.*?<span itemprop="location">.*?<a.*?>(.*?)<\/a>/', $data, $matches);
//echo '<pre>'.print_r($matches).'</pre>';

$number = count($matches[1]);

for($i=0; $i<$number; $i++){
	$event_name       = mysql_real_escape_string(trim(strip_tags($matches[1][$i])));
	$location_name    = mysql_real_escape_string(trim(strip_tags($matches[3][$i])));
	$event_time_start = strtotime(strip_tags($matches[2][$i]));
	$event_time_end   = $event_time_start + 7200; // + 2 hours

	//echo $start_date_str . ' => ' . $event_time_start . ' => '.date('Y-m-d H:i', $event_time_start).'<br />';

	$query = 'INSERT IGNORE INTO locations (location_name, city) VALUES ("%s", "%s")';
	$query = sprintf($query, $location_name, 'Bucuresti');

	if(mysql_query($query)){
		$id  = mysql_insert_id();
		$query = 'INSERT IGNORE INTO events (event_name, id_location, time_start, time_end) VALUES("%s", "%d", "%d", "%d")';
		$query = sprintf($query, $event_name, $id, $event_time_start, $event_time_end);
		mysql_query($query);	
	}else{

	}
}
?>