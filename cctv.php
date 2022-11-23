<?php
// Load camera image url
require_once ("Config.php");

// Get camera image from $url
$current = file_get_contents($url);

// sed image data to browser
header('Content-type: image/jpeg');
echo $current;
?>
