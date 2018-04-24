<?php
include('config.php');
$user_id=$_GET['uid'];

$query="UPDATE users SET confirmed='1' where user_id='$user_id'";
echo $query;
if(mysqli_query($conn,$query)){;

  
  $s="<p class='text-success'>Comment Updated Successfully</p>";
  echo"<script>window.location='alluser.php'</script>";
  echo $s;


}


?>