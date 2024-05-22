<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Set the recipient email address
    $to = "unmesh.phaterpekar@colorado.edu"; // Replace with your email address

    // Set the email subject
    $subject = "New Contact Form Submission";

    // Construct the email body
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Comment:\n$comment\n";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
