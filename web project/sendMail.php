<?php

function sendEmail($email,$body,$headers)
{
require '../PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();                              // Passing `true` enables exceptions


    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "chaosknight751@gmail.com";                 // SMTP username
    $mail->Password = "chaos123";                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
    //Recipients
    $mail->setFrom('chaosknight751@gmail.com', '');
    $mail->addAddress($email,"");     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Sent by Saleem!";
    $mail->Body    = $body;
    $mail->headers = $headers;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
        
    }
    else
    {
    //echo 'Message has been sent';
    }
}

?>