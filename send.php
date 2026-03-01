<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $organization = htmlspecialchars($_POST['organization']);
    $message = htmlspecialchars($_POST['message']);

    // Where the email will be sent
    $to = "info@drjoeevans.com";

    // Email subject
    $subject = "New Consultation Request - DrJoeEvans.com";

    // Email body
    $body = "You have received a new consultation request.\n\n";
    $body .= "Full Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Organization: $organization\n\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
                alert('Thank you! Your consultation request has been submitted.');
                window.location.href='index.html';
              </script>";
    } else {
        echo "<script>
                alert('Sorry, there was an issue sending your request. Please try again.');
                window.location.href='index.html';
              </script>";
    }
}

?>
