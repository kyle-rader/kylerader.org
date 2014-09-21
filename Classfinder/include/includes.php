<?php

$docRoot = $_SERVER["DOCUMENT_ROOT"] . "/Classfinder";
$devServer = $_SERVER['SERVER_NAME'] == 'dev.kylerader.org';

include_once "$docRoot/include/utilityFunctions.php";

$terms = Array();
$terms['nav-items'] = Array(
    '/Classfinder' => 'HOME',
    '/Classfinder/Search' => 'SEARCH',
    '/Classfinder/MySchedule' => 'MY SCHEDULE',
    '/' => 'Back To KyleRader.org');

$terms['footer-links'] = Array(
	'https://kylerader.org' => 'Back to KyleRader.org',
	'https://www.wwu.edu' => 'WWU Home');

