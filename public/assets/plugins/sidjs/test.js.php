<?php

header('Content-type: text/javascript');

$i = isset($_GET['i']) ? $_GET['i'] : '0';

if (isset($_GET['s'])) {
	$s = (int)$_GET['s'];
	sleep($s);
	echo 'alert("script '. $i .' loaded after '. $s .' seconds");';
}
else {
	echo 'alert("script '. $i .' loaded");';
}
