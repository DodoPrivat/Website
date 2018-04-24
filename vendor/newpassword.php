<!DOCTYPE html>

<html lang="en" >


<head>
  
<meta charset="UTF-8">
  
<title>Sign-Up/Login Form</title>
  
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' 
rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/sign/normalize.min.css">

  
      
<link rel="stylesheet" href="css/sign/style.css">

  


</head>



<body>



<?php
require "config.php";
$email=$_GET["email"];


$sql ="SELECT username FROM users WHERE email='$email'";
	$result=$mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

?>


<div class="form">


    
      

         
<h1>Enter New Password</h1>
          
          
<form action="new.php" method="post">


<div class="field-wrap">


<input type="email" readonly required autocomplete="off" name="email" value="<?php echo $email ?>" />
?>

</div>
          
<div class="field-wrap">

<label>
Set A Password<span class="req">*</span>
</label>

<input type="password" required autocomplete="off" name="password" />
</div>

<button type="submit" class="button button-block"/>Update Password</button>

</form>


</div>


</div><!-- tab-content -->

</div> <!-- /form -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
</script>


<script  src="js/sign/index.js"></script>








</body>


</html>
