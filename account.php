<?php
if(empty($_SESSION)) 
   session_start();


if(isset($_SESSION['cust_name'])) { 
   header("location: index.html");
   exit; 
}

$connect = mysqli_connect("localhost", "root", "", "bakery");

$querylogo = "SELECT img_name FROM logo";
 $result1 = mysqli_query($connect, $querylogo);
$row1 = mysqli_fetch_assoc($result1);

$a=$row1['img_name'];

?>

<!DOCTYPE html>

<html lang="en" >


<head>
  
<meta charset="UTF-8">
  
<title>Sign-Up/Login Form</title>
  
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' 
rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/sign/normalize.min.css">

  
      
<link rel="stylesheet" href="css/sign/style.css">

  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/sign/demo.css">
	
<link rel="stylesheet" href="css/sign/footer-distributed-with-address-and-phones.css">
	
	
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">




<style>
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}

body{


background-color:#FFF8DC;
}

div{
display:block;
}

.nav{
background:#152732;

}
.logo{
width:100%;
height:100%;
float:left;
padding: 5px 5px;
}

@media only screen and (max-width: 500px) {
 .logo{
width:300%;
height:200%;
align:center;

}

}
@media only screen and (min-width: 500px) {
 .logo{
width:100%;
height:210%;
float:left;

}

}
@media only screen and (min-width: 600px) {
.logo1{
width:100%;
height:10%;
float:left;}



}


.nav1{
float:left;
width:25%;
height:10%;}

.navi{
float:right;
width:75%;
//height:5%;
margin-top:2%;
}

.naav li{
float:left;
background:#152732;
}

.naav li:hover{
opacity:0.4;

}

.naav li a{
color:white;}

.naav li a:hover{
color:grey;}

.text{
padding:12px;
color:grey;
}
.headingtext{
color:grey;	
}
</style>
</head>


<body>

  
<div class="" align=center>
<div class=" navbar-inverse nav">
			<div class="container-fluid">
<div class="container">
		                     <div class="navbar-header nav1">	
					<a class="navbar-brand logo" href="index.html"><img src="logo/<?php echo "$a"; ?>" alt="" width=70% height=70%/></a>
				</div>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			<div id="navbar" class="navbar-collapse collapse  navi">
		<ul class="nav navbar-right naav">
		<li><a href="index.html"><b>Home</b></a></li>
		<li><a href="account.php"><b>Login</b></a></li>
		<li><a href="account.php"><b>Sign Up</b></a></li>
						
		</ul>
		</div>
		</div>
	</nav>
	</div>
    </div>

<div class="form">

      
<ul class="tab-group">
        
<li class="tab active"><a href="#signup">Sign Up</a></li>
        
<li class="tab"><a href="#login">Log In</a></li>
      
</ul>
      
      

<div class="tab-content">
        

<div id="signup">   
          
<h1 class=headingtext>Sign Up for Free</h1>
          
          
<form action="signup.php" method="post">
   
  <span id="user-availability-status"></span>     
          
<div class="top-row">

<div class="field-wrap">

<label>
Username<span class="req">*</span>
</label>
<input type="username" required autocomplete="off" name="cust_name" id="cust_name" onBlur="checkAvailability()" class="text"  />
            
</div>
        
            
<div class="field-wrap">
              
<label>
Contact No<span class="req">*</span>
             
</label>
              

<input type="contact" required autocomplete="off" name="contact" class="text" />
            
</div>

</div>



<div class="field-wrap">

<label>Address<span class="req">*</span>
</label>

<input type="text"required autocomplete="off" name="address" class="text" />

</div>

        
<div class="field-wrap">

<label>Email Address<span class="req">*</span>
</label>

<input type="email"required autocomplete="off" name="email" class="text" />

</div>


<div class="top-row">
<div class="field-wrap">

<label>
City<span class="req">*</span>
</label>

<input type="city" required autocomplete="off" name="city" class="text"  />

</div>

<div class="field-wrap">

<label>
Country<span class="req">*</span>

</label>


<input type="country" required autocomplete="off" name="country" class="text" />

</div>

</div>



<div class="field-wrap">

<label>Business<span>*</span>
</label>

<input type="text" name="business" class="text"  />

</div>


<div class="field-wrap">

<label>
Set A Password<span class="req">*</span>
</label>

<input type="password" required autocomplete="off" name="password" class="text" />
</div>

<button type="submit" class="button button-block"/>Get Started</button>

</form>


</div>


<div id="login">

<h1 class=headingtext >Welcome Back!</h1>


<form action="login.php" method="post">
<div class="field-wrap">

<label>
Enter Email Address <span class="req">*</span>
</label>

<input type="email"required autocomplete="off" name="cust_email" class="text" />

</div>

<div class="field-wrap">

<label>

Password<span class="req">*</span>

</label>

<input type="password"required autocomplete="off" name=pass class="text" />

</div>

<p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

<input type=submit value=Login class="button button-block" />
</form>


</div>
    
</div><!-- tab-content -->

</div> <!-- /form -->

<footer class="footer-distributed">

			
<div class="footer-left">


	

<a class="navbar-brand logo1" href="index.html" ><h3><span><font color=#E20D24>Apki</font></span>Bakery</h3></a>
<p class="footer-links">

<a href="index.html">Home</a>
*
 
<a href="account.php">LogIn</a>
* 
<a href="account.php">SignUp</a>

</p>


<p class="footer-company-name">Apki Bakery &copy; 2018</p>

</div>

			
<div class="footer-center">


<div>

<i class="fa fa-map-marker"></i>

<p><span></span> Karachi, Pakistan</p>

</div>


<div>

<i class="fa fa-phone"></i>

<p>++923343398827</p>

</div>


<div>

<i class="fa fa-envelope"></i>

<p><a href="mailto:info@apkibakery.com"><font color=white>info@apkibakery.com</font></a></p>

</div>


</div>


<div class="footer-right">

				
<p class="footer-company-about">

<span>About Topworth</span>

WE ARE OFFERING BAKERY SERVICES TO OUR CUSTOMERS WITH BEST QUALITY, MINIMUM TURNAROUND and AFFORDABLE PRICE.			
</p>


<div class="footer-icons">


<a href="#"><i class="fa fa-facebook"></i></a>

<a href="#"><i class="fa fa-twitter"></i></a>

<a href="#"><i class="fa fa-linkedin"></i></a>

<a href="#"><i class="fa fa-github"></i></a>


</div>

			
</div>

		
</footer>

	
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
</script>


<script  src="js/sign/index.js"></script>



<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'cust_name='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>




</body>


</html>
