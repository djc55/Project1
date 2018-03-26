<?php
require 'db.php' ;

$fname = $_POST["reg_fname"];
$lname = $_POST["reg_lname"];
$email = $_POST["reg_email"];
$p_number = $_POST["reg_pnumber"];
$bday = $_POST["reg_bday"];
$gender = $_POST["reg_gender"];
$password = $_POST["reg_password"];


$sql = "select * from djc55.accounts where email = '$email' ";
$results = runQuery($sql);
if (count($results) > 0) {

	echo "This email is taken. Please use another one.";
}

else {

$sql ="insert into accounts (email, fname, lname, phone, birthday, gender, password)  values  ('$email', '$fname', '$lname', '$p_number', '$bday', '$gender', '$password');";

$results = runQuery($sql);
echo 'User with email: ' . $email . ' has been created.';


}




?>