<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    
    $email = $_POST['email'];
   

    // Your email address where you want to receive messages
    $to = "virajpate27@gmail.com";

    // Email subject
    $subject = "New Subscription Form Submission";

    // Email content
   
    $email_content .= "Email: $email\n\n";
   

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: subscription.html");
        exit;
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit;
}

?>