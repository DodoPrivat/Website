<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add New Heading</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST["btn"])){
	
	if(empty($_POST['heading'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		$heading=clean($_POST['heading']);
		
		$query2="Insert into headings values('','$_POST[pages]','$heading')";
	
		
		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	}
}


?>

<form method="post" action="">


<div class="form-group">
<label> Heading Name</label>
<input type="text" class="form-control" name="heading"/>
</div>

<div class="form-group">
<label> Select Page</label>
<select class="form-control" name="pages">
<?php  
$query="select * from pages";
$sql=mysqli_query($conn,$query);
if(mysqli_num_rows($sql)>0)
{
	
	while($row=mysqli_fetch_assoc($sql)){
		
		
		
		
	
?>
<option value="<?php echo $row['pgid'];  ?>"><?php echo $row['pgname'];  ?></option>
<?php 

	}
}
?>
</select>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add Heading "/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>










