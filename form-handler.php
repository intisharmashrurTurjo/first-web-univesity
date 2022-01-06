<?php
$name = $_POST ['name'];
$visitor_email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

$email_form = 'intishar000turjo@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "subject: $subject.\n".
               "User Email: $visitor_email.\n";


$to = 'intishar000turjo@gmail.com';
$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contuct.html")


?>
