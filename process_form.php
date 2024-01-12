<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "maheshaviduranga@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $message = "First Name: " . $_POST["first_name"] . "\n";
    $message .= "Last Name: " . $_POST["last_name"] . "\n";
    $message .= "Phone: " . $_POST["phone"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Message: " . $_POST["message"];

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your message. We will contact you shortly.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>


