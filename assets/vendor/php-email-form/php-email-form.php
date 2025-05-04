<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  die('Invalid request');
}

class PHP_Email_Form {
  public $to;
  public $from_name;
  public $from_email;
  public $subject;
  public $smtp = false;
  public $ajax = false;
  public $messages = array();

  public function add_message($content, $label = '', $length = 0) {
    $this->messages[] = array(
      'label' => $label,
      'content' => $content,
      'length' => $length
    );
  }

  public function send() {
    $email_content = "";
    foreach ($this->messages as $message) {
      $email_content .= $message['label'] . ": " . $message['content'] . "\n";
    }

    if ($this->smtp) {
      // Send via SMTP
    //   require_once 'vendor/autoload.php'; // PHPMailer (composer required)
    require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';



      $mail = new PHPMailer\PHPMailer\PHPMailer();
      $mail->isSMTP();
      $mail->Host = $this->smtp['host'];
      $mail->SMTPAuth = true;
      $mail->Username = $this->smtp['username'];
      $mail->Password = $this->smtp['password'];
      $mail->SMTPSecure = $this->smtp['encryption'];
      $mail->Port = $this->smtp['port'];

      $mail->setFrom($this->from_email, $this->from_name);
      $mail->addAddress($this->to);
      $mail->Subject = $this->subject;
      $mail->Body = $email_content;

      if (!$mail->send()) {
        if ($this->ajax) {
          return 'Error: ' . $mail->ErrorInfo;
        }
        return false;
      } else {
        if ($this->ajax) {
          return 'OK';
        }
        return true;
      }
    } else {
      // Send via PHP mail()
      $headers = 'From: '. $this->from_name .' <'. $this->from_email .'>' . "\r\n" .
                 'Reply-To: '. $this->from_email . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

      if (mail($this->to, $this->subject, $email_content, $headers)) {
        if ($this->ajax) {
          return 'OK';
        }
        return true;
      } else {
        if ($this->ajax) {
          return 'Error: Message could not be sent.';
        }
        return false;
      }
    }
  }
}
?>
