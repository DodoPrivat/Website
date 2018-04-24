<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add Content</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST["btn"])){
	
	if(empty($_POST['content'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		$content=clean($_POST['content']);
		
		$query2="Insert into content values('','$_POST[pages]','$content')"
		;

	
		
		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	}
}


?>

<form method="post" action="">


<div class="form-group">
<label> Content Message</label>
<input type="text" class="form-control" name="content"/>
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
<input type="submit" class="btn btn-default" name="btn" value="Add Content  "/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>










