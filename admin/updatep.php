<?php
include("config.php");
$cid=0;

if(isset($_POST['update'])){
$UPDATEQuery="UPDATE products SET Name='$_POST[t1]',Link='$_POST[t2]',Description=
'$_POST[t3]', WHERE Name='$_POST[hidden]'";
$cid=1;
echo $UPDATEQuery;
$conn->query($UPDATEQuery);	
}