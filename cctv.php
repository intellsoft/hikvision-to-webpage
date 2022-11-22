<?php
require_once ("Config.php");

$url = "http://user:123456qQ@192.168.100.175:85/ISAPI/Streaming/channels/1/picture";
$current = file_get_contents($url);

header('Content-type: image/jpeg');
echo $current;
?>
