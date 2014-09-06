<?php

$javascript = <<<EOT
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/vendor/fastclick.js"></script>
<script type="text/javascript" src="/js/vendor/modernizr.js"></script>
<script type="text/javascript" src="/js/vendor/placeholder.js"></script>
<script type="text/javascript" src="/js/vendor/foundation.min.js"></script>
EOT;

if(isset($js)) {
    $javascripts .= $js;
}
$jsReady = isset($jsRead) ? $jsReady : '';
$javascript .= <<<EOT
<script type="text/javascript">
    $(document).ready(function() {
        $(document).foundation();
        $jsReady
    });
</script>
EOT;

print my_minify($javascript);
