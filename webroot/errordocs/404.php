<html>
<head>
<title>404</title>
</head>

<body>
<h1>404: Document Not Found</h1>
<p>
 The page you were looking for was not found.
</p>
<hr>

<?php
// If the request URI starts with "/moodle/" then we can ignore this problem,
//  since it's a problem following our move.
$request_uri = $_SERVER['REQUEST_URI'];
if (strcasecmp(substr($request_uri, 0, 8), '/moodle/') != 0) {
    // Take everything after the domain name, and prepend our new address
    $newurl = "http://www.sloodle.org/moodle".$request_uri;
    echo <<<XXXEODXXX
<p style="font-size:110%;">
 <strong>Please Note:</strong> most of the <a href="http://www.sloodle.org">Sloodle.org</a> site was recently moved to <a href="http://www.sloodle.org/moodle">Sloodle.org/moodle</a>. The address you were looking for may now be at:
</p>

<p style="font-size:150%; font-weight:bold;">
<a href="{$newurl}" title="Click here to try this address instead">{$newurl}</a>
</p>
XXXEODXXX;
}
?>



</body>
</html>

