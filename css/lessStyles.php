<?php
$docRoot = $_SERVER['DOCUMENT_ROOT'];
include_once "$docRoot/include/utilityFunctions.php";

$files = array('mixins', 'variables', 'reset', 
    'typography', 'grid', 'blocks', 'tables', 'forms', 
    'navigation', 'buttons', 'notifications', 'labels', 
    'progress', 'accordion', 'filterbox', 'tooltip', 'dropdown', 
    'livesearch', 'upload', 'autocomplete', 'modal', 
    'helpers', 'prettyprint', 
    'grid-responsive', 'blocks-responsive', 'typography-responsive', 
    'navigation-responsive', 'forms-responsive', 
    'print',
    'framework', 'sideNav', 'resume', 'hack');


if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");
else ob_start();

$time = mktime(0,0,0,21,5,1980);
$cache = "$docRoot/css/cache/less.out.css";

foreach($files as $file) {
    $fileTime = filemtime("$docRoot/css/less/$file.less");

    if($fileTime > $time) {
        $time = $fileTime;
    }
}

if(file_exists($cache)) {
    $cacheTime = filemtime($cache);
    if($cacheTime < $time) {
        $time = $cacheTime;
        $recache = true;
    } else {
        $recache = false;
    }
} else {
    $recache = true;
}

if(!$recache && isset($_SERVER['If-Modified-Since']) && strtotime($_SERVER['If-Modified-Since']) >= $time){
    header("HTTP/1.0 304 Not Modified");
} else {
    header('Content-type: text/css');
    header('Last-Modified: ' . gmdate("D, d M Y H:i:s", $time) . " GMT");

    if($recache) {
        require "$docRoot/less.php/Less.php";
        $options = array('compress' => true);
        $parser = new Less_Parser($options);
        foreach($files as $file){
            $parser->parseFile("$docRoot/css/less/$file.less");
        }

        $css = $parser->getCss();
        file_put_contents($cache, $css);
        echo $css;
    } else {
        readfile($cache);
    }
}
