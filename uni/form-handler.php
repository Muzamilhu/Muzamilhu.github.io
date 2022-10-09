<?php
$name = $_POST['name'];
$visitor_email; = $_POST['email'];
$subject; = $_POST['subject'];
$message; = $_POST['message'];

$email_from ="mk.pk@gmail.com";
 $email_subject = 'New Form Submission';
 $email_body = "User Name: $name.\n".
               "User Email: $ Visitor_email.\n".
               "subject": $subject.\n".
               "User message:$message.\n";
               $to='mk.pk@gmail.com;
               $header ="From: $email_from \r\n";
               $header .="Reply-TO: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$header);
    header("Location: contact.html");
 ?>