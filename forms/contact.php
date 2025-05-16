<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set your email
$receiving_email_address = 'sales@devmoulders.in';

// Load the email form class
if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;
$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'] ?? 'Unknown';
$contact->from_email = $_POST['email'] ?? 'no-reply@yourdomain.com';
$contact->subject = $_POST['subject'] ?? 'No Subject';

// SMTP config (optional)

// Add the message content
$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

  echo $contact->send();
?>
