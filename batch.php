<?php
//define fie type
header('content-type:image/jpeg');

//collect source and data
$user = $_POST['username'];
$source = "img/batch.jpg";

//set background image
$image = imagecreatefromjpeg($source);

//parameters for text
$color = imagecolorallocate($image,255,10,0);
$font_size = 60;
$rotation = 0;
$origin_x = 130;
$origin_y  = 380;
$font ="C:\Users\Rajat\Downloads\open-sans\OpenSans-Regular.ttf";

//add text to image
imagettftext($image,$font_size,$rotation,$origin_x,$origin_y,$color,$font,$user);

//final image create
imagejpeg($image);


?>