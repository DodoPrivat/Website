<?php

include("header.php");
if(isset($_REQUEST['id'])){
	
	$Id=$_REQUEST['id'];
$query="delete from category where Cid= '$Id'";
mysqli_query($conn,$query);
echo"<script> window.location='allcategory.php'</script>";
}


if(isset($_REQUEST['Sid'])){
	
	$SId=$_REQUEST['Sid'];
$query2="delete from subcategory where Sid= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allsubcategory.php'</script>";
}



if(isset($_REQUEST['Pid'])){
	
	$SId=$_REQUEST['Pid'];
$query2="delete from products where Pid= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allproduct.php'</script>";
}

if(isset($_REQUEST['cid'])){
	
	$SId=$_REQUEST['cid'];
$query2="delete from content where cid= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allcontent.php'</script>";
}




if(isset($_REQUEST['hid'])){
	
	$SId=$_REQUEST['hid'];
$query2="delete from headings where hid= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allheadings.php'</script>";
}

if(isset($_REQUEST['pgid'])){
	
	$SId=$_REQUEST['pgid'];
$query2="delete from pages where pgid= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allpages.php'</script>";
}

if(isset($_REQUEST['vid'])){
	
	$SId=$_REQUEST['vid'];
$query2="delete from vendor where vid= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allvendor.php'</script>";
}


if(isset($_REQUEST['uid'])){
	
	$SId=$_REQUEST['uid'];
$query2="delete from users where user_id= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='alluser.php'</script>";
}





if(isset($_REQUEST['comid'])){
	
	$SId=$_REQUEST['comid'];
$query2="delete from comments where Id= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allcomments.php'</script>";
}

?>