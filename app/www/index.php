<?php

echo "<h1>Hello PHP!</h1>";

$scheme = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$url = "$scheme://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo "<pre><code>Request URL: $url</pre></code>";

?>

<img src="/static/test-image.svg">
</img>
