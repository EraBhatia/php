<?php //php 7.0.8
$string="This a Random String for an example.";
echo $string;
echo "\nAfter Removing Spaces : \n";
$string = preg_replace('/\s+/', '', $string);
echo $string;
?>
