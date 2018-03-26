<?php
require 'db.php' ;


$email = $_POST["reg_email"];
$password = $_POST["reg_password"];


$sql = "select * from djc55.accounts where email = '$email' ";
$results = runQuery($sql);
if (count($results) < 1) {

	echo "Email is incorrect";
}

else {
	$sql = "select * from djc55.accounts where email = '$email' AND password = '$password'"; 
	$results = runQuery($sql);
	if (count($results) < 1){
		echo "Password is incorrect";

	}
	else {
		$fname = $results[0]['fname'];
		$lname = $results[0]['lname'];
		echo "Welcome " . $fname . " " .$lname;
	}




}






?>