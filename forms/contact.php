<?php
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'sales@devmoulders.in';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

// SMTP Settings
  // // for local gmail 
  // 'host' => 'smtp.gmail.com',
  // 'username' => 'magadev110@gmail.com',
  // 'password' => 'andd liwd uems gapb',
  // 'port' => '587',
  // 'encryption' => 'tls'


$contact->smtp = array(
  // for server devmoulders 
  'host' => 'devmoulders.in', // Outgoing Server
  'username' => 'devmo@devmoulders.in', // Full email address
  'password' => 'YOUR_EMAIL_PASSWORD',  // Set this to the password you created in cPanel for the email account
  'port' => '465',
  'encryption' => 'ssl' // Use 'tls' only if using port 587
);


$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

echo $contact->send();
?>