<?php
$docRoot = $_SERVER['DOCUMENT_ROOT'];
$files = array();

if(!isset($_GET['files'])) {
    header("HTTP/1.0,0 400 Missing Argument:files");
    exit();
}
else {

    foreach(explode($_GET['files']) as $file) {
        if(!exists("$docRoot/css/$file.less")) {
            header("HTTP/1.0,0 404 Bad Argument: \"$file\" does not exist.");
            exit();
        } else {
            $files[] = $file;
        }
    }
}

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");
else ob_start();

$time = mktime(0,0,0,21,5,1980);
$cache = 'cache.css';

foreach($lessFiles as $file) {
    $fileTime = filemtime($file);

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
    header('Last-Modified: ' . gmdate("D, d M Y H:i:s",$time) . " GMT");

    if($recache) {
        require "$docRoot/css/lessc.inc.php";
        $lc = new lessc();

        $css = '';

        foreach($lessFiles as $file){
            $css .= file_get_contents($file);
        }

        $css = $lc->parse($css);
        file_put_contents($cache, $css);
        echo $css;
    } else {
        readfile($cache);
    }
}
