<?php
require_once("config.php");



if(!empty($_POST["cust_name"])) {
  $sql ="SELECT count(*) FROM customers WHERE cust_name='" . $_POST["cust_name"] . "'";
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