<?php 

// define variables and set to empty values
//$name_error = $email_error = $phone_error = $url_error = "";
//$name = $email = $phone = $message = $url = $success = "";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
//$house = $_POST["house"];
$message = $_POST["message "];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'localhost';  // Specify main and backup SMTP servers
   // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //$mail->Username = 'user@example.com';                 // SMTP username
   // $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //sender
    $mail->setFrom($email, $name);
    //recipient
    $mail->addAddress('marykilewe@gmail.com', 'Mary');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

   $body = 'This is the <b>message</b> i wish to send'

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
   // $mail->Message = $message;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}