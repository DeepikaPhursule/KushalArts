<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email_address = strip_tags(htmlspecialchars($_POST['email']));
// $phone = strip_tags(htmlspecialchars($_POST['phone']));
// $message = strip_tags(htmlspecialchars($_POST['message']));
	
// // Create the email and send the message
// $to = 'deepika.phursule@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
// $email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
// $headers = "From: deepika.phursule@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: deepika.phursule@gmail.com";	
// mail($to,$email_subject,$email_body,$headers);
// return true;		


//Declarate the necessary variables
$mail_to = "deepika.phursule@gmail.com";
$mail_from=$_POST["txtEmail"];
$mail_sub="Contact Form Details";
$mail_mesg=$txtMsg;

/*$headers = "From:$mail_from/r/nReply-to:$mail_from";
$headers .= "Content-type: text/html\r\n";*/

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//Check for success/failure of delivery 
if(mail($mail_to,$mail_sub,$mail_mesg,$headers))
echo "<center><span class='textred' align='center'><b>E-mail has been sent successfully from $mail_sub to $mail_to</b></span></center>";
else
echo "<center><span class='textred' align='center'><b>Failed to send the E-mail from $mail_sub to $mail_to</b></span></center>";
}

echo ("<meta http-equiv='refresh' content='2;url=http://sanketv.com/'>");	
?>

