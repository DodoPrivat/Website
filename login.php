<?php

session_start();

require "config.php";

$cust_email=$_POST['cust_email'];
$password=$_POST['pass'];
$dec_pass=base64_encode($password);


if($cust_email && $password)
{
	$sql ="SELECT * FROM customers WHERE email='$cust_email'";
	$result=$mysqli->query($sql);

$numrow = mysqli_num_rows($result);
	
	if($numrow!=0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$db_email = $row['email'];
			$db_password = $row['password'];
			$db_confirmed = $row['confirmed'];
                        $_SESSION['cust_name']=$row['cust_name'];

                      

		}
		
		if($cust_email==$db_email && $dec_pass==$db_password)
		{
			if($db_confirmed == 1)
			{
				echo "Logged in <a href='index.html'>Click here to enter the members area</a>";
			
                                header("location:index.html?user='$cust_email'");
		
				
			}
			else
			{
				header("location:error.php?error=Your Account Is Not Activated");	
			}
		}
		else 
		{
			header("location:error.php?error=Incorrect Password");
		}
	}
	else
	{
		header("location:error.php?error=That user doesn't exist");
	}
}
else 
{
	header("location:error.php?error=All fields are required");

}


?>