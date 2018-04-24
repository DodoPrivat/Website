<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Search Products</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>Product ID</td>
    <td>Product Name</td>
      <td>Recipe Link</td>
    <td> Description</td>
        <td>Product Sub Category</td>
    <td> Product Image</td>
    <td colspan="2" align="center">Action</td>
  </tr>
  
  <?php
  $query="select * from products where $_POST[search]='$_POST[detail]'";
  echo $query;
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	 
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    
     <td><?php echo ucwords($row['Pid']);?> </td>
      <td><?php echo ucwords($row['Name']);?> </td>
       <td><?php echo ucwords($row['Description']);?> </td>
        <td><?php echo ucwords($row['Link']);?> </td>
        <td><?php
	$query2="select * from subcategory where Sid='$row[Sid]'";
	$sql2=mysqli_query($conn,$query2);
	$row2=mysqli_fetch_assoc($sql2);
	
	
	 echo ucwords($row2['SCatName']);?> </td>
         <td><img src="images/<?php echo ucwords($row['Image']);?>" alt="" height="100" width="100"/> </td>
       
	
    <td><a href="delv.php?Pid=<?php echo $row['Pid'];?>" class="btn btn-danger"> Delete</a></td>
    <td><a href="editp.php?Pid=<?php echo $row['Pid'];?>" class="btn btn-primary">Update</a></td>
  </tr>
  
  
  <?php
}
  }
  else{
	  echo"<p class='text-danger'>Record not Found Kindly check your Inputs or Register</p></br>";
  }
  
  ?>
  
  
</table>





</div>
</div>
</div>





<?php

include("footer.php");?>