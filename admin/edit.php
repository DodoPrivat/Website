<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
include("config.php");


if(isset($_POST['update'])){
$UPDATEQuery="UPDATE users SET username='$_POST[t1]',password='$_POST[t2]',email=
'$_POST[t3]' ,addres='$_POST[t2]'WHERE username='$_POST[hidden]'"
;
echo $UPDATEQuery;
$conn->query($UPDATEQuery);	
}

$DELQuery="DELETE FROM users WHERE user_id='$_GET[uid]'";
echo $DELQuery;
$conn->query($DELQuery);
echo"<script> window.location='alluser.php'</script>";	

$s="Select * from users where user_id='$_GET[uid]'";
$result=$conn->query($s);
echo "<table border='1'>
<tr>
<th> Username</th>
<th> Password</th>
<th> Email</th>
<th> Address</th>
</tr>";
while($row = mysqli_fetch_assoc($result)){
echo"<form action='u.php' method='post'>";echo "<tr>";
echo"<td>"."<input type='text' name='t1' value=" .$row['username'] ." </td>";
echo"<td>"."<input type='text' name='t2' value=" .$row['password'] ." </td>";
echo"<td>"."<input type='text' name='t3' value=" .$row['email'] ." </td>";
echo"<td>"."<input type='text' name='t4' value=" .$row['address'] ." </td>";
echo"<td>"."<input type='hidden' name='hidden' value=" .$row['username'] ." </td>";

}

?>
<body>
</body>