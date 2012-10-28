<?php

//Db config
$DB_HOST = 'localhost';
$DB_NAME = 'cipevent';
$DB_USER = 'root';
$DB_PASS = '';

mysql_connect($DB_HOST, $DB_USER, $DB_PASS) or die('No db connection');
mysql_select_db($DB_NAME);
mysql_query("SET NAMES utf8");

//Design backgrounds config
$bgs = array('img/theatre.jpg', 
			 'img/concert.jpg', 
			 'img/concert2.jpg', 
			 'img/concert3.jpg', 
			 'img/museum.jpg', 
			 'img/museum2.jpg');

$bg = $bgs[rand(0, count($bgs)-1)];

?>