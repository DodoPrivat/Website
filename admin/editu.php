<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Update User Information</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
  <table class="table table-bordered" >
    <tr>
    <td>Name</td>
    <td>Password</td>
      <td>Email</td>
    <td>Address</td>
    <td>Contact</td>
  </tr>
  
  <?php
  $query="Select * from users where user_id='$_GET[user_id]'";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
	
  
  ?>
 
    
<?php echo"<form action='update.php' method='post'>";echo "<tr>";
echo"<td>"."<input type='text' name='t1' value=" .$row['username'] ." </td>";
echo"<td>"."<input type='text' name='t2' value=" .$row['password'] ." </td>";
echo"<td>"."<input type='text' name='t3' value=" .$row['email'] ." </td>";
echo"<td>"."<input type='text' name='t4' value=" .$row['address'] ." </td>";
echo"<td>"."<input type='text' name='t5' value=" .$row['contact'] ." </td>";
echo"<td>"."<input type='hidden' name='hidden' value=" .$row['username'] ." </td>";

?>
<tr>
      <td><input type="submit" value="update" name="update" class="btn btn-primary"/></td></tr>
  
 </form> 
  <?php
}
  }
  else{
	  echo"<p class='text-danger'>Record not Found Kindly check your Inputs or Register</p></br>";
  }
  
  ?>
  
  
</table>

<?php

include("footer.php");
?>



</div>
</div>
</div>