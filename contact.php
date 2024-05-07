<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Your email address where you want to receive messages
    $to = "viraj@thewebdecor.com";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Email: $number\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: contact-us.html");
    exit;
}

?>