<?php
$to = "zinnyblackburn@gmail.com"; // <-- replace with your email
$subject = "New Booking Form Submission";

$message = "Name: " . $_POST['user_name'] . "\n";
$message .= "Email: " . $_POST['user_email'] . "\n";
$message .= "Instagram: " . $_POST['instagram'] . "\n";
$message .= "Pronouns: " . $_POST['pronouns'] . "\n";
$message .= "City: " . $_POST['city'] . "\n";
$message .= "Size & Placement: " . $_POST['size'] . "\n";
$message .= "Design: " . $_POST['design'] . "\n";
$message .= "Budget: " . $_POST['budget'] . "\n";
$message .= "Additional Info: " . $_POST['additional_info'] . "\n";

$headers = "From: " . $_POST['user_email'];

if(mail($to, $subject, $message, $headers)) {
    echo "Thank you! Your booking has been sent.";
} else {
    echo "Sorry, something went wrong. Please try again.";
}
?>
