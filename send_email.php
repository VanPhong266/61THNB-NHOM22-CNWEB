<?php
    $username= 'nguyenquantung2001@gmail.com';
    $pass = 'gjucjnbmrbsdffhv';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


//2 
function sendEmailForAccountACtive($email, $link){
    global $username;
    global $pass;
    $mail = new PHPMailer(true);

    try {
    
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $username;                     //SMTP username
        $mail->Password   = $pass;                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465; 
        $mail -> CharSet = "UTF-8";                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('nguyenquantung2001@gmail.com', 'Edmono');
        $mail->addAddress($email, $username);     //Add a recipient
        //content
        $mail->isHTML(TRUE);
        $mail->Subject = 'Kích hoạt tài khoản trên Edmono';
        $mail->Body    = 'Chào mừng bạn đến với localhost, '.$link;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


        if($mail->send()){
            return TRUE;
        }
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } 
    return FALSE;
}

?>