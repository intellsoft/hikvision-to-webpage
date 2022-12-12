<?php
$Camera_IP = "151.247.249.244";
$Camera_Port = "85";
$Camera_Username = "user";
$Camera_Password = "123456qQ";
$Camera_Pre_url = "http://";
$Load_Interval = 2000;

$output_Image_Width = 500; // output image width size in px
$output_Image_height = 400; // output image height size in px

// Generate a image url
$url = $Camera_Pre_url . $Camera_Username . ":" . $Camera_Password . "@". $Camera_IP . ":" . $Camera_Port . "/ISAPI/Streaming/channels/1/picture";
?>