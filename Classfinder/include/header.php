<head>
<?php
$title = isset($pageTitle) ? $pageTitle : 'WWU Classfinder';

$head = <<<EOT
<title>$title</title>
<link rel="stylesheet" type="text/css" href="/css/hero-font.css" />
<link rel="stylesheet" type="text/css" href="/css/f-icons/foundation-icons.css" />
<link rel="stylesheet" type="text/css" href="/css/reboot.css" />

EOT;

if(isset($pageSpecificStyles)) {
    $head .= $pageSpecificStyles;
}

print my_minify($head);
?>
</head>
