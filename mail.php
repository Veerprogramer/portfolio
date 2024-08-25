<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = filter_var(trim($_POST['full-name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST['subject']));
    $message = filter_var(trim($_POST['message']));

    $to = "vrofficial360@gmail.com";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    mail($to, $subject, $fullMessage, $headers);
}
