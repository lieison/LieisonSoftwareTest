<?php

require ("mailer/PHPMailerAutoload.php");
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.lieison.org";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;

//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "support@lieison.org";
//Password to use for SMTP authentication
$mail->Password = "support2015";
//Set who the message is to be sent from
$mail->setFrom('nlima@lieison.com', 'Prueba Correo');
//Set an alternative reply-to address
$mail->addReplyTo('support@lieison.org', 'Prueba Correo');
//Set who the message is to be sent to
$mail->addAddress('nlima@lieison.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("<p>Prueba de correo</p>");
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}