
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bakery");
?>
      
        <div class="grid_10">
            <div class="box round first">
                <h2 align="center">
                   Vendor Registration</h2>
                <div class="block">
                    
					<form name="form1" action="add_product.php" method="post" enctype="multipart/form-data">
					<table border="1" align="center">
					<tr>
					<td style="text-align:center"> Your Name</td>
					<td align="center"><input type="text" name="vname"  placeholder="Enter Your Complete Name" required></td>
					</tr>
					<tr>
					<td style="text-align:center">Set a Password</td>
					<td align="center"><input type="password" name="password"  required placeholder="Enter Password"></td>
					</tr>
					<tr>
					<td style="text-align:center">Your Bakery Name</td>
					<td align="center"><input type="text" name="bk_name"  placeholder="Your Complete Bakey Name" required></td>
					</tr>
					<tr>
					<td style="text-align:center">Upload Your Bakery Logo</td>
					<td align="center"><input type="file" name="image" required></td>
					</tr>
					<tr>
					<td style="text-align:center">Your Email</td>
					<td align="center"><input type="email" name="email"  placeholder="Enter your Email Address" required></td>
					</tr>
					<tr>
					<td style="text-align:center">Your Bkaery Address</td>
					<td align="center"><input type="text" name="addr"  placeholder="Enter your Bakery Address" required>
			        </td>
					</tr>
                    
                    <tr>
					<td style="text-align:center">Please Provide Your Phone or Contact Details </td>
					<td align="center"><input type="text" name="phone"  placeholder="Enter yourContact Details" required>
			        </td>
					</tr>
                    
                    <tr>
					<td style="text-align:center">Please Provide Some Your Bakery Description </td>
					<td><textarea cols="15" rows="10" name="desc"></textarea>
			        </td>
					</tr>
					<tr>
					<td colspan="2" align="center"><input type="submit" name="SignUp" value="SignUp"></td>
				</tr>
					
					
					</table>
					
					
					</form>

<?php
if(isset($_POST["SignUp"]))
{
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["image"]["name"];
   $dst="./vendor_logo/".$v3.$fnm;
   $dst1="vendor_logo/".$v3.$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);



$confirmcode = rand();
mysqli_query($link,"insert into vendors values('','$_POST[vname]','$_POST[password]','$_POST[bk_name]','$dst1','$_POST[email]','$_POST[addr]','$_POST[phone]','$_POST[desc]','0','0','0','$confirmcode')");

$message ="Confirm Your Email
		Click the link below to verify your account
		http://localhost/bakery/emailvconfirm.php?username=$username&code=$confirmcode";
		
		require('phpmailer1/phpmailer1/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "minhalraza46@gmail.com";
$mail->Password = "jamesbond007";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("minhalraza46@gmail.com", "Minhal Raza");
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
	


}

?>					
					
					
                </div>
            </div>   