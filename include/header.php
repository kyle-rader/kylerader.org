<head>
<?php
$title = isset($page) ? $page : 'Kyle Rader.org';
$frmk = isset($frameworkCSS) ? $frameworkCSS : '/css/framework.css';
$head = <<<EOT
<title>$title</title>
<link rel="stylesheet" type="text/css" href="/css/hero-font.css" />
<link rel="stylesheet" type="text/css" href="/css/reboot.css" />
<link rel="stylesheet" type="text/css" href="/css/vendor/normalize.css" />
<link rel="stylesheet" type="text/css" href="/css/vendor/foundation.min.css" />
<link rel="stylesheet" type="text/css" href="/css/f-icons/foundation-icons.css" />
<link rel="stylesheet" type="text/css" href="$frmk" />
EOT;

print my_minify($head);
?>
</head>
