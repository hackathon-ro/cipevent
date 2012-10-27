<?php

$DB_HOST = 'localhost';
$DB_NAME = 'cipevent';
$DB_USER = 'root';
$DB_PASS = '';

mysql_connect($DB_HOST, $DB_USER, $DB_PASS) or die('No db connection');
mysql_select_db($DB_NAME);
?>