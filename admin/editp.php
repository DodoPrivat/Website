<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Update Product Information</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
  <table class="table table-bordered" >
    <tr>
    <td>Name</td>
    <td>Link</td>
      <td>Description</td>
    <td>Category</td>
  </tr>
  
  <?php
  $query="Select * from products where Pid='$_GET[Pid]'";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
	
  
  ?>
 
    
<?php echo"<form action='updatep.php' method='post'>";echo "<tr>";
echo"<td>"."<input type='text' name='t1' value=" .$row['Name'] ." </td>";
echo"<td>"."<input type='text' name='t2' value=" .$row['Link'] ." </td>";
echo"<td>"."<input type='text' name='t3' value=" .$row['Description'] ." </td>";

 $query2="select * from subcategory where Sid='$row[Sid]'";
	$sql2=mysqli_query($conn,$query2);
	$row2=mysqli_fetch_assoc($sql2);	
echo"<td>"."<input type='text' name='t4' value=" .$row2['SCatName'] ." </td>";
echo"<td>"."<input type='hidden' name='hidden' value=" .$row['Name'] ." </td>";
"<td>"."<input type='hidden' name='hidden1' value=" .$row2['Sid'] ." </td>";
?> 
<td><input type="submit" value="update" name="update" class="btn btn-primary"/></td>
  
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