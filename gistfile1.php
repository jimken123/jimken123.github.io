<?php
//This will get an array of all the gif, jpg and png images in a folder
$img_array = glob("/img/grand_canyon/*.{gif,jpg,png}",GLOB_BRACE);
//Pick a random image from the array
$img = array_rand($img_array);
//Display the image on the page
echo '<img alt="'.$img_array[$img].'" src="'.$img_array[$img].'" />';
?> 
