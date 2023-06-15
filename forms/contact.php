<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'your-email@example.com';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Prepare email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Send email
  $is_sent = mail($receiving_email_address, $subject, $message, $headers);

  if ($is_sent) {
    echo 'Email sent successfully!';
  } else {
    echo 'Unable to send email. Please try again later.';
  }
}
?>
<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'shazebali767@gmail.com';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Prepare email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Send email
  $is_sent = mail($receiving_email_address, $subject, $message, $headers);

  if ($is_sent) {
    echo 'Email sent successfully!';
  } else {
    echo 'Unable to send email. Please try again later.';
  }
}
?>
