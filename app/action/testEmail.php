<?php
$to = "kubwimanaeddy1@gmail.com";
$subject = "Hello Eddy";
$message = "This is a test email.";
$headers = "From: eddy.kubwimana@ashesi.edu.gh\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send email
$mail_sent = mail($to, $subject, $message, $headers);

// Check if mail sent successfully
if ($mail_sent) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
