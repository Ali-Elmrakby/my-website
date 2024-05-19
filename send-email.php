<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'aliaymanud@gmail.com';
    $subject = 'New message from your website';
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully.';
    } else {
        echo 'An error occurred. Please try again later.';
    }
}
?>
