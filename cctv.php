<?php
require_once ("Config.php");

$current = file_get_contents($url);

header('Content-type: image/jpeg');
echo $current;
?>
