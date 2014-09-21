<head>
<?php
$title = 'WWU Classfinder 2.0';

$head = <<<EOT
<title>$title</title>
<link rel="stylesheet" type="text/css" href="/css/hero-font.css" />
<link rel="stylesheet" type="text/css" href="/css/f-icons/foundation-icons.css" />
<link rel="stylesheet" type="text/css" href="/Classfinder/css/lessStyles.php" />

EOT;

if(isset($pageSpecificStyles)) {
    $head .= $pageSpecificStyles;
}

print my_minify($head);
?>
</head>
