<?php

header('Content-type: text/css');

$c = isset($_GET['c']) ? $_GET['c'] : 'fc0000';

if (isset($_GET['s'])) {
	$s = (int)$_GET['s'];
	sleep($s);
}
echo 'body { background-color: #'. $c .'; }';
