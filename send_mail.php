<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    $recipient = "unmesh.phaterpekar@colorado.edu";  // Change this to your email address
    $subject = "Message from Website Contact Form";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Comment:\n$comment\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong, we couldn't send your message.";
    }
}
?>
