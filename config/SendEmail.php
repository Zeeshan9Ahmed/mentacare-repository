<?php 
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 

function sendVerificationCode(string $email, $code){
    // $phpmailer = new PHPMailer();
    // $phpmailer->isSMTP();
    // $phpmailer->Host = 'smtp.mailtrap.io';
    // $phpmailer->SMTPAuth = true;
    // $phpmailer->Port = 2525;
    // $phpmailer->Username = '15b41bac814bc1';
    // $phpmailer->Password = '3812a2482e6768';

    $phpmailer = new PHPMailer; 
    
    $phpmailer->isSMTP();                      // Set mailer to use SMTP 
    $phpmailer->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
    $phpmailer->SMTPAuth = true;               // Enable SMTP authentication 
    $phpmailer->Username = 'zeeshanindhar378@gmail.com';   // SMTP username 
    $phpmailer->Password = '2k18swe131';   // SMTP password 
    $phpmailer->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $phpmailer->Port = 587;                    // TCP port to connect to 
    
    // Sender info 
    $phpmailer->setFrom('sender@codexworld.com', 'CodexWorld'); 
    $phpmailer->addReplyTo('reply@codexworld.com', 'CodexWorld'); 
    
    // Add a recipient 
    $phpmailer->addAddress($email); 
    
    //$mail->addCC('cc@example.com'); 
    //$mail->addBCC('bcc@example.com'); 
    
    // Set email format to HTML 
    $phpmailer->isHTML(true); 
    
    // Mail subject 
    $phpmailer->Subject = 'Email from Mentcare'; 
    
    // Mail body content 
    $bodyContent = '<p>Your Verification code is  <b>"'.$code.'"</b></p>'; 
    $phpmailer->Body    = $bodyContent; 
    
    // Send email 
    if(!$phpmailer->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$phpmailer->ErrorInfo; 
    } else { 
        echo 'Message has been sent.'; 
    } 
}

?>