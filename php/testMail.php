<?php
require 'lib/PHPMailer/PHPMailerAutoload.php';
include 'config.php';

$mail = new PHPMailer;


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $CONFIG['email'];                 // SMTP username
$mail->Password = $CONFIG['email_pass'];                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('aeroventila@gmail.com', 'Rent a Movie');
$mail->addAddress('maxiyanez84@gmail.com', 'Maxi Yañez');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Recuperar contraseña';
$mail->Body    = 'Ingres&aacute; <a href="#">aquí</a> para repcuperar tus contraseña';
$mail->AltBody = 'Ingres&aacute; aquí para repcuperar tus contraseña: #';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}