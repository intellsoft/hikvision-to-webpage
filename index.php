<?php
/*
 * M.Ali.Abbaspor
 * Desc: show hikvision cctv image camera in web page
 *
 * note: only work in hikvision camera with ISAPI function.
 *
 * intellsoft : https://intellsoft.ir/
 * Contact me on element messanger: @intellsoft:matrix.org
 * https://matrix.to/#/@intellsoft:matrix.org
 */

// Load camera connection parameters
require_once ("Config.php");

// this image tag display camera image
$camera_Image =  '<img id="myImage" width="'.$output_Image_Width.'" height="'.$output_Image_height.'" src="cctv.php">';

?>
<html>
<head>
    <title>بارگزاری تصویر دوربین مداربسته هایک ویژن در صفحه سایت</title>
</head>
<body>
<?php echo $camera_Image; ?>
<script>

    // Refresh image tag every $Load_Interval miliseconds.
    // see Config.php for change.
    var intervalId = window.setInterval(function(){
        refreshImage();
    }, <?php echo $Load_Interval; ?>);


    function refreshImage(){
        document.getElementById("myImage").src = "cctv.php"+ `?v=${new Date().getTime()}`;
    }
</script>

</body>
</html>
