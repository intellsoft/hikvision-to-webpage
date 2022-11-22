<?php
/*
 * M.Ali.Abbaspor
 * Desc: show hikvision cctv image camera in web page
 *
 * note: only work in hikvision camera with ISAPI function
 */

require_once ("Config.php");

$current = file_get_contents($url);

$camera =  '<img id="myImage" src="cctv.php">';

?>
<html>
<body>
<?php echo $camera; ?>
<script>

    var intervalId = window.setInterval(function(){
        refreshImage();
    }, <?php echo $Load_Interval; ?>);


    function refreshImage(){
        document.getElementById("myImage").src = "cctv.php"+ `?v=${new Date().getTime()}`;
    }
</script>

</body>
</html>
