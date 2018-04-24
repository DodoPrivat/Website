<?php
include "config.php";

$email=$_POST["cust_email"];

if($email)
{
	$sql ="SELECT * FROM customers WHERE email='$email'";
	$result=$mysqli->query($sql);

$numrow = mysqli_num_rows($result);
	
	if($numrow!=0)
	{



	
		$message ="Click the link below to Forget your Password
		http://localhost/bakery/newpassword.php?email=$email";		

	

require('phpmailer1/phpmailer1/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "minhalraza46@gmail.com";
$mail->Password = "intel5555";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("info@apkibakery.com", "Apki-Bakery");
$mail->AddReplyTo("from email", "PHPPot");
$mail->AddAddress("$email");
$mail->Subject = "Reset Your Password";
$mail->WordWrap   = 80;
$content = "<b>$message </b>"; $mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send()) 
echo "Problem sending email.";
else 
{echo "email sent.Plz check you Email for reset password";}
}

else{

echo "Wrong Email Entered";
}
}

$mysqli->close();
?>