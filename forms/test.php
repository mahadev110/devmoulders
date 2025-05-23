<?php
$to = 'magadev110@gmail.com';
$subject = 'Test Email from Server (PHP mail function)';
$message = "This is a test email sent from the server using PHP's mail() function.";
$headers = "From: YourWebsite <no-reply@yourdomain.com>\r\n";
$headers .= "Reply-To: no-reply@yourdomain.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "✅ Email sent successfully!";
} else {
    echo "❌ Failed to send email.";
}
?>


<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set your receiving email
$receiving_email_address = 'magadev110@gmail.com';

// Get POST data safely
$name = $_POST['name'] ?? 'Unknown';
$email = $_POST['email'] ?? 'no-reply@yourdomain.com';
$subject = $_POST['subject'] ?? 'No Subject';
$message = $_POST['message'] ?? 'No message received.';

// Build the email content
$email_subject = "New Contact Form Submission: " . $subject;
$email_body = "You have received a new message from your website contact form:\n\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Message:\n$message\n";

// Build headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($receiving_email_address, $email_subject, $email_body, $headers)) {
    echo "✅ Message sent successfully!";
} else {
    echo "❌ Message failed to send.";
}
?>
