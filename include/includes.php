<?php

$docRoot = $_SERVER["DOCUMENT_ROOT"];
$devServer = $_SERVER['SERVER_NAME'] == 'dev.kylerader.org';

include_once "$docRoot/include/db.php";
include_once "$docRoot/include/utilityFunctions.php";

$terms = Array();
$terms['nav-items'] = Array(
    '/' => 'HOME',
    '/Hack' => 'WWU CS HACKATHON',
    'http://classfinder.kylerader.org' => 'CLASSFINDER PROJECT',
    '/Resume' => 'RESUME',
    '/Resources' => 'RESOURCES');

$terms['footer-links'] = Array(
	'https://kylerader.org' => 'KyleRader.org',
	'https://www.wwu.edu' => 'WWU Home');