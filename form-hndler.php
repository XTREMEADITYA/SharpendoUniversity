<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'adityagupta979797@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "subject: $subject.\n".
               "user message: $message .\n";

$to = 'jyotiguptagpt89@gmail.com';

$header = "form: $email_from \r\n";

$header = "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: CONTACT.HTML");

?>