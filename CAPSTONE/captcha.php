<?php
session_start();
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 7);
$_SESSION["vercode"] = $captcha_num;

	$height = 35; 
	$width = 100;   
	$image_p = imagecreate($width, $height); 
	$black = imagecolorallocate($image_p, 0, 0, 0); 
	$white = imagecolorallocate($image_p, 123, 255, 255); 
	$font_size = 200; 
	imagestring($image_p, $font_size, 5, 5, $captcha_num, $white); 
	imagejpeg($image_p, null, 80); 


?>