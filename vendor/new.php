<?php
require "config.php";

$email=$_POST["email"];
$pass=$_POST["password"];
$enc_pass=base64_encode($pass);

echo $email;
echo $pass;
echo $enc_pass;
$update="UPDATE customers SET password='$enc_pass' WHERE email='$email'";
echo"Your Password Update Succesfully Login to continue <a href='account.php'> LOGIN</a>";
$mysqli->query($update);	
$mysqli->close();
?>      