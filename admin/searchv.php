<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Search Users</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>Vendor ID</td>
    <td>Bakery Name</td>
      <td>User Password</td>
    <td> User Contact</td>
        <td>User Email</td>
    <td> User Address</td>
    <td> Vendor Name</td>
    <td colspan="2" align="center">Action</td>
  </tr>
  
  <?php
  $query="select * from vendor where $_POST[search]='$_POST[detail]'";
  echo $query;
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	 
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    
     <td><?php echo ucwords($row['vid']);?> </td>
      <td><?php echo ucwords($row['bakeyname']);?> </td>
       <td><?php echo ucwords($row['password']);?> </td>
        <td><?php echo ucwords($row['contact']);?> </td>
         <td><?php echo ucwords($row['email']);?> </td>
        <td><?php echo ucwords($row['addr']);?> </td>
      <td><?php echo ucwords($row['venname']);?> </td>
	
    <td><a href="delv.php?vid=<?php echo $row['vid'];?>" class="btn btn-danger"> Delete</a></td>
    <td><a href="editv.php?vid=<?php echo $row['vid'];?>" class="btn btn-primary">Update</a></td>
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