<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'landoulsiferes@outlook.com';
    $subject = 'Contact Form Submission';
    $message_body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message_body, $headers)) {
        echo '<p>Your message has been sent. Thank you!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>
