<?php
include("config.php");
$cid=0;

if(isset($_POST['update'])){
$UPDATEQuery="UPDATE users SET username='$_POST[t1]',password='$_POST[t2]',email=
'$_POST[t3]',address='$_POST[t4]',contact='$_POST[t5]' WHERE username='$_POST[hidden]'";
$cid=1;
echo $UPDATEQuery;

$conn->query($UPDATEQuery);	
  echo"<script>window.location='searchuser.php'</script>";
}