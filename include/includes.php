<?php

$docRoot = $_SERVER["DOCUMENT_ROOT"];

include_once "$docRoot/include/db.php";
include_once "$docRoot/include/utilityFunctions.php";

$terms = Array();
$terms['nav-items'] = Array(
    '/' => 'HOME',
    '/Hack' => 'WWU CS HACKATHON',
    'Classfinder' => 'CLASSFINDER 2.0',
    '/Resume' => 'RESUME',
    '/Resources' => 'RESOURCES');
