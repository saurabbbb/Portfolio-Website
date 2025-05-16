<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $services = isset($_POST['services']) ? implode(", ", $_POST['services']) : "No services selected";

    $to = "grsauravis12@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "Email: $email\nServices: $services\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>