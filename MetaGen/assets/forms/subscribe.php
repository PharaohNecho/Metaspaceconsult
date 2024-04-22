<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $to = "dx@metaspaceconsult.com"; 
    $subject = "New Email Subscription From MetaGen";
    $message = "A new email subscription:\n\nEmail: " . $email;

    // Send the email
    mail($to, $subject, $message);

    // Respond to the client
    echo "Thank you for subscribing!";
}
?>
