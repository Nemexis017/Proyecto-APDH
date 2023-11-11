<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../phpMeiler/Exception.php';
require '../phpMeiler/PHPMailer.php';
require '../phpMeiler/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp-gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'olpierjesusfernud@gmail.com';                     
    $mail->Password   = 'fmnlmkbkfhhcrzke';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 587;                                

    //Recipients
    $mail->setFrom('olpierjesusfernud@gmail.com', 'Jesus Carvajal');
    $mail->addAddress($_POST['txtEmail']);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['txtAsunto'];
    $mail->Body    = $_POST['txtMensaje'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'el mensaje fue inviado correctamente';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}