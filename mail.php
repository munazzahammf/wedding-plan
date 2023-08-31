<?php
require 'vendor/autoload.php'; // Load PHPMailer library

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF; // You can change this to SMTP::DEBUG_SERVER for debugging
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // You can use your email provider's SMTP settings
    $mail->SMTPAuth = true;
    $mail->Username = 'dreamday1119@gmail.com'; // Your Gmail email address or temporary address
    $mail->Password = 'lbttwyhrwpsxhhwq'; // Your Gmail password or an app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Recipients
        $mail->setFrom('dreamday1119@gmail.com', 'Dream Day'); // Use the temporary email here
        $mail->addAddress($email, 'Recipient Name');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Provide Us Further Details';
        $mail->Body = '
            <h1>Thank you for showing interest with us.</h1>
            <p>Please Fill out this google 
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeCWOGKarWkQuk-PCP9ePMyPttBYgZjs7KCYIzVJSFvSk2iQQ/viewform?usp=sf_link">
            form
            </a>
            to provide further details.</p>
            ';

        header('Location: index.php');
        $mail->send();
    }
} catch (Exception $e) {
    echo "Email sending failed: {$mail->ErrorInfo}";
}
