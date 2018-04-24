<?php
include "config.php";
$cust_name=$_POST["cust_name"];
$contact=$_POST["contact"];
$address=$_POST["address"];
$email=$_POST["email"];
$city=$_POST["city"];
$country=$_POST["country"];
$business=$_POST["business"];
$password=$_POST["password"];

$enc_pass=base64_encode($password);
if($cust_name && $email && $enc_pass)
	{

		$confirmcode = rand();
		$add ="INSERT INTO customers(cust_name,email,city,country,contact,address,type,business,password,confirmed,uc) VALUES('$cust_name','$email','$city','$country','$contact',address,'customer','$business','$enc_pass','0','$confirmcode')";


		$mysqli->query($add);
	
		$message ="Confirm Your Email
		Click the link below to verify your account
		http://localhost/bakery/emailconfirm.php?cust_name=$cust_name&code=$confirmcode";		

echo "Registration Complete! Please confirm your email address";
	}

require('phpmailer1/phpmailer1/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "minhalraza46@gmail.com";
$mail->Password = "agentjamesbond007";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("apkibakery@gmail.com","Apki-Bakery");
$mail->AddReplyTo("from email", "PHPPot");
$mail->AddAddress("$email");
$mail->Subject = "Confirm Your Email";
$mail->WordWrap   = 80;
$content = "<b>$message </b>"; $mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send()) 
echo "Problem sending email.";
else 
{echo "email sent.";}

$mysqli->close();
?>