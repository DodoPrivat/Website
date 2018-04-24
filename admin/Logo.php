<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add New Logo</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST['btn'])){
if($_FILES['Upload']['size']>0){
if($_FILES['Upload']['size']<400000){
	
	if($_FILES['Upload']['type']=='image/png'|| $_FILES['Upload']['type']=='image/jpeg'||$_FILES['Upload']['type']=='image/gif'){
		
		
		$dir="logo/";
		$file=$_FILES['Upload']['name'];
		
		if(file_exists($dir.$_FILES['Upload']['name'])){
			
			echo  "this file is already exists";
			
		}else
			{
				move_uploaded_file($_FILES['Upload']['tmp_name'],$dir.$_FILES['Upload']['name']);

		$query2="Insert into logo values('','$file',now())";
		echo $query2;
	
		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	}
}
}
}
}
else{  
echo "Image is Compusurly";
}

	
	
	



?>

<form method="post" action="" enctype="multipart/form-data">




<div class="form-group">
<label> Upload Logo Image</label>
<input type="file" class="form-control" name="Upload"/>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add Logo Image"/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>










