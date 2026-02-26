<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $organization = htmlspecialchars($_POST['organization']);
  $message = htmlspecialchars($_POST['message']);

  $to = "info@drjoeevans.com";
  $subject = "New Consultation Request - DrJoeEvans.com";

  $body = "You have received a new consultation request:\n\n";
  $body .= "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Organization: $organization\n\n";
  $body .= "Message:\n$message";

  $headers = "From: info@drjoeevans.com\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
      echo "Message sent successfully.";
  } else {
      echo "Message failed to send.";
  }
}
?>
