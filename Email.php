<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];

$to = "sushantkc97@gmail.com";
$subject = "New Booking Request";
$message = "Name: $name\nPhone: $phone\nEmail: $email\nDate: $date";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

header("Location: thank-you.html");
?>