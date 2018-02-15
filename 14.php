<?php
$email1= "justanexample@gmail.com";
$email2= "justanexample.com";
function echeck($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	echo("$email is a valid email address\n");
	} 	else {
  	echo("$email is not a valid email address\n");
	}
}
echeck($email1);
echeck($email2);
?>
