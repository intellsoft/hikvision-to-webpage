
<?php
$Camera_IP = "192.168.100.175";
$Camera_Port = "85";
$Camera_Username = "user";
$Camera_Password = "123456qQ";
$Camera_Pre_url = "http://";
$Load_Interval = 300;

$url = $Camera_Pre_url . $Camera_Username . ":" . $Camera_Password . "@". $Camera_IP . ":" . $Camera_Port . "/ISAPI/Streaming/channels/1/picture";

$current = file_get_contents($url);
file_put_contents("hh.jpeg",$current);

echo '<img id="myImage" src="hh.jpeg">';

?>

<script>

    var intervalId = window.setInterval(function(){
        refreshImage();
    }, <?php echo $Load_Interval; ?>);


    function refreshImage(){
        document.getElementById("myImage").src = "cctv.php"+ `?v=${new Date().getTime()}`;
    }
</script>
