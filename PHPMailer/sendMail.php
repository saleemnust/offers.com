<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;                              // Passing `true` enables exceptions
   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'saleem1.ms1882@gmail.com';                 // SMTP username
    $mail->Password = '725336111';                           // SMTP password
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
    $mail->setFrom('saleem1.ms1882@gmail.com', 'Saleem');
    $mail->addAddress('saleem1.ms1882@gmail.com', 'Awan');     // Add a recipient
    //$mail->addAddress('saleem1.ms1882@gmail.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('saleem1.ms1882@gmail.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Sent by Saleem';
    $mail->Body    = 'Its me Saleem</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
		
	}
	else
    echo 'Message has been sent';

?>