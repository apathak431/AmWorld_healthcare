<?php 
$ToEmail = 'your email id'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "First Name: ".$_POST["firstname"].""; 
$MESSAGE_BODY = "Last Name: ".$_POST["lastname"]."";
$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>