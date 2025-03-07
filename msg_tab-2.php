<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "emiliokamau35@gmail.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: " . $email;
    $body = "You have received a new message from " . $name . " (" . $email . ").\n\nMessage:\n" . $message;

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message failed to send.";
    }
}
?>
