<?php

$javascript = <<<EOT
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/kube/kube.min.js"></script>
EOT;

if(isset($js)) {
    $javascripts .= $js;
}
$jsReady = isset($jsRead) ? $jsReady : '';
$javascript .= <<<EOT
<script type="text/javascript">
    $(document).ready(function() {
        $jsReady
    });
</script>
EOT;
if (!$devServer) {
$javascript .= <<<EOT
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54776214-1', 'auto');
  ga('send', 'pageview');

</script>
EOT;
}

print my_minify($javascript);
