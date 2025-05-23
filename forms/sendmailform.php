<?php
/**
 * Requires the "PHP Email Form" library
 * Available at: https://bootstrapmade.com/php-email-form/
 * Ensure this path is correct:
 */
$receiving_email_address = 'sales@devmoulders.in';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'] ?? '';
$contact->from_email = $_POST['email'] ?? '';
$contact->subject = $_POST['subject'] ?? 'New Message from Contact Form';

// Enable SMTP
$contact->smtp = array(
'host' => 'smtp.gmail.com',
  'username' => 'magadev110@gmail.com',
  'password' => 'andd liwd uems gapb',
  'port' => '587',
  'encryption' => 'tls'
);

// Add form messages
$contact->add_message($_POST['name'], 'Name');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['subject'], 'Subject');
$contact->add_message($_POST['message'], 'Message', 10); // 10 = priority

echo $contact->send();
?>
