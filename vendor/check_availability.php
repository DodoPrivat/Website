<?php
require_once("config.php");



if(!empty($_POST["vname"])) {
  $sql ="SELECT count(*) FROM vendors WHERE ven_name='" . $_POST["vname"] . "'";
$result=$mysqli->query($sql);
  $row = mysqli_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>