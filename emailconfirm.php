<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Confirmation</title>
</head>

<body>
<?php

require "config.php";

$cust_name = $_GET['cust_name'];
$code = $_GET['code'];
echo $cust_name;
echo $code;


$add ="SELECT * FROM customers WHERE `cust_name`='$cust_name'";

$result = mysqli_query($mysqli, $add);
$row = $result->fetch_assoc();
$row["uc"];
echo $row["uc"];
if($code == $row['uc'])
{
$con ="UPDATE `customers` SET `confirmed`='1'";
$result1 = mysqli_query($mysqli, $con);
	$cod ="UPDATE `customers` SET `uc`='0'";
	$result2 = mysqli_query($mysqli, $cod);
	echo "Thank You. Your email has been confirmed and you may now login <a href=account.php>Login</a>";
}
else
{
	echo "Name and code dont match";
}

?>
</body>
</html>