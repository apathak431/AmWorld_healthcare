<?php 
$ToEmail = 'tanujn45@gmail.com'; 
$EmailSubject = 'News letter Subscriber'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
mail($ToEmail, $EmailSubject) or die ("Failure");
header("Location: sidebar.php");
?>