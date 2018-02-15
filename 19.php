<?php //php 7.0.8
$str="the quick brown fox jumps over the lazy dog.";
echo "String before Edit : ".$str."\n After Edit : ";
echo preg_replace('/the/','That',$str,1);
?>
