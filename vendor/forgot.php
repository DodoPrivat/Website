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

  

<div class="form">

      
<ul class="tab-group">
        
<li class="tab active" align=center><a href="#forgot">Forgot Password</a></li>
             
</ul>
      
      

<div class="tab-content">
    

<div id="forgot">   
          
<h1>Forgot Your Password</h1>
          
          
<form action="reset.php" method="post">
   
       
          

        
<div class="field-wrap">

<label>Email Address<span class="req">*</span>
</label>

<input type="email"required autocomplete="off" name="cust_email"/>

</div>


<button type="submit" class="button button-block"/>Reset</button>

</form>


</div>



</div><!-- tab-content -->

</div> <!-- /form -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
</script>


<script  src="js/sign/index.js"></script>








</body>


</html>
