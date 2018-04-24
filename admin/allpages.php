<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2>All Pages</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>S.No</td>
     <td>Page Name</td>
    <td  align="center"colspan="2">Action</td>
  </tr>
  
  <?php
  $query="select * from pages";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo ucwords($row['pgname']);?> </td>
    
    <td align="center"><a href="del.php?pgid=<?php echo $row['pgid'];?>" class="btn btn-danger"> Delete</a>
    <a href="editpg.php?pgid=<?php echo $row['pgid'];?>" class="btn btn-primary"> Edit</a></td>
  </tr>
  
  
  <?php
}
  }
  
  ?>
  </table>





</div>
</div>
</div>





<?php

include("footer.php");?>