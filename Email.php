<?php
// Sanitize and validate input
$name = htmlspecialchars(trim($_POST['name']));
$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$message_text = htmlspecialchars(trim($_POST['message']));

// Check if email is valid
if (!$email) {
    die("Invalid email address.");
}

// Email setup
$to = "sushantkc97@gmail.com";  // Your receiving email
$subject = "New Contact Message";
$message = "You have received a new message:\n\n";
$message .= "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Message:\n$message_text\n";

$headers = "From: no-reply@yourdomain.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
    header("Location: thank-you.html");
    exit;
} else {
    echo "Sorry, something went wrong. Please try again later.";
}
?>
