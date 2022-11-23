<?php
$Camera_IP = "192.168.100.175";
$Camera_Port = "85";
$Camera_Username = "user";
$Camera_Password = "123456qQ";
$Camera_Pre_url = "http://";
$Load_Interval = 300;

// Generate a image url
$url = $Camera_Pre_url . $Camera_Username . ":" . $Camera_Password . "@". $Camera_IP . ":" . $Camera_Port . "/ISAPI/Streaming/channels/1/picture";
?>