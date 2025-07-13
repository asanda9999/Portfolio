<?php
// Custom email handler for contact form
header('Content-Type: text/plain');

// Set your receiving email address
$receiving_email_address = 'asandamkhize9@gmail.com';

// Helper function to sanitize input
function sanitize($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = isset($_POST['name']) ? sanitize($_POST['name']) : '';
  $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
  $subject = isset($_POST['subject']) ? sanitize($_POST['subject']) : 'Contact Form Message';
  $message = isset($_POST['message']) ? sanitize($_POST['message']) : '';

  // Basic validation
  if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Please fill in all fields with a valid email.';
    exit;
  }

  $email_subject = "[Contact Form] $subject";
  $email_body = "You have received a new message from your website contact form.\n\n" .
                "Name: $name\n" .
                "Email: $email\n" .
                "Message:\n$message\n";
  $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

  if (mail($receiving_email_address, $email_subject, $email_body, $headers)) {
    echo 'OK';
  } else {
    http_response_code(500);
    echo 'Failed to send email. Please try again later.';
  }
} else {
  http_response_code(405);
  echo 'Method Not Allowed';
}
