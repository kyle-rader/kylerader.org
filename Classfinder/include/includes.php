<?php

$docRoot = $_SERVER["DOCUMENT_ROOT"] . "/Classfinder";
$devServer = $_SERVER['SERVER_NAME'] == 'dev.kylerader.org';

include_once "$docRoot/include/utilityFunctions.php";

$terms = Array();
$terms['nav-items'] = Array(
    '/' => 'HOME',
    '/Hack' => 'WWU CS HACKATHON',
    '/Classfinder' => 'CLASSFINDER 2.0',
    '/Resume' => 'RESUME',
    '/Resources' => 'RESOURCES');
