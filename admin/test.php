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
    <td>UserId</td>
    <td>User Name</td>
      <td>User Password</td>
    <td>User Email</td>
    <td> User Contact</td>
    <td> User Address</td>
    <td colspan="2" align="center">Action</td>
  </tr>
  
  <?php
  $query="select * from users where $_POST[search]='$_POST[detail]'";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    
     <td><?php echo ucwords($row['user_id']);?> </td>
      <td><?php echo ucwords($row['username']);?> </td>
       <td><?php echo ucwords($row['password']);?> </td>
        <td><?php echo ucwords($row['email']);?> </td>
         <td><?php echo ucwords($row['contact']);?> </td>
        <td><?php echo ucwords($row['address']);?> </td>
      
	
    <td><a href="del.php?uid=<?php echo $row['user_id'];?>" class="btn btn-danger"> Delete</a></td>
    <td><a href="editu.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-primary">Update</a></td>
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