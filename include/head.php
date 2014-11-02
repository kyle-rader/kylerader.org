<head>
<?php
$title = 'Kyle W. Rader';

$head = <<<EOT
<title>$title</title>
<link rel="stylesheet" type="text/css" href="/css/f-icons/foundation-icons.css" />
<link rel="stylesheet" type="text/css" href="/css/lessStyles.php?v=1.1" />
EOT;

if(isset($pageSpecificStyles)) {
    $head .= $pageSpecificStyles;
}

print my_minify($head);
?>
</head>
