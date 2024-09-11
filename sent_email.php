<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // PHPMailer Object
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'your-email@gmail.com';                 // SMTP username (Gmail email)
        $mail->Password   = 'your-app-password';                    // SMTP password (Use App Password from Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);                              // From email and name
        $mail->addAddress('info@alfazza.my.id');                  // Add a recipient (your email)

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "Name: $name<br>Email: $email<br>Message: $message";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";

        $mail->send();
        echo 'Message has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
