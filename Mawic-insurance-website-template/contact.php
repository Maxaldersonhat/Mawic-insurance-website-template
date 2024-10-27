<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $project = htmlspecialchars(trim($_POST['project']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Check for empty fields
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "maxshakurk199@gmail.com"; // Replace with your email address
        $email_subject = "Contact Form: $subject";
        $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nProject: $project\n\nMessage:\n$message";
        $headers = "From: $email";

        // Send email
        if (mail($to, $email_subject, $email_body, $headers)) {
            echo "Thank you, your message has been sent!";
        } else {
            echo "Sorry, your message could not be sent. Please try again later.". error_get_last()['message'];
}
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request.";
}
?>

