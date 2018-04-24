<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2>All Headings</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>S.No</td>
    <td>Heading Name</td>
     <td>Page Name</td>
    <td  align="center"colspan="2">Action</td>
  </tr>
  
  <?php
  $query="select * from headings";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo ucwords($row['hname']);?> </td>
    
<td><?php
	$query2="select * from pages where pgid='$row[pgid]'";
	$sql2=mysqli_query($conn,$query2);
	$row2=mysqli_fetch_assoc($sql2);
	
	
	 echo ucwords($row2['pgname']);?> </td>
    <td align="center"><a href="del.php?hid=<?php echo $row['hid'];?>" class="btn btn-danger"> Delete</a>
    <a href="edith.php?hid=<?php echo $row['hid'];?>" class="btn btn-primary"> Edit</a></td>
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