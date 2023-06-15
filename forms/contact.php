<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'shazebali26@gmail.com';

$response_message = '';

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
    $response_message = 'Email sent successfully!';
  } else {
    $response_message = 'Unable to send email. Please try again later.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
  <h2>Contact Form</h2>

  <form action="contact.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>

    <input type="submit" value="Submit">
  </form>

  <?php if (!empty($response_message)): ?>
    <p><?php echo $response_message; ?></p>
  <?php endif; ?>
</body>
</html>
