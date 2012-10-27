<?php

require_once('../../config.php');



$url = 'http://bucuresti.zilesinopti.ro/evenimente.html';

$data = file_get_contents($url);
$data = str_replace("\r\n", '', $data);
$data = str_replace("\n", '', $data);
$data = str_replace("\t", '', $data);






?>