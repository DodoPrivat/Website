<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add Pages</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST["btn"])){
	
	if(empty($_POST['Page'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		$page=clean($_POST['Page']);
		
		$query="Insert into pages values('','$page')";
		
		
		if(mysqli_query($conn,$query)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	}
}


?>

<form method="post" action="">


<div class="form-group">
<label> Page name</label>
<input type="text" class="form-control" name="Page"/>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add New Page"/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>




























