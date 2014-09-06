<head>
<?php
$title = isset($page) ? $page : 'Kyle Rader.org';
$frmk = isset($frameworkCSS) ? $frameworkCSS : '/css/framework.css';
$head = <<<EOT
<title>$title</title>
<link rel="stylesheet" type="text/css" href="/css/hero-font.css" />
<link rel="stylesheet" type="text/css" href="/css/reboot.css" />
<link rel="stylesheet" type="text/css" href="$frmk" />
<link rel="stylesheet" type="text/css" href="/css/sideNav.css" />
EOT;

print my_minify($head);
?>
</head>
