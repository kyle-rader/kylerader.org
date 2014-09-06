<?php

$javascript = <<<EOT
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
EOT;

if(isset($js)) {
    $javascripts .= $js;
}
$jsReady = isset($jsRead) ? $jsReady : '';
$javascript .= <<<EOT
<script type="text/javascript">
    $(document.ready(function() {
        $(document).foundation();
        $jsReady
    });
</script>
EOT;

print my_minify($javascript);
