<?php
$email = $_POST['email'];

// Send email to the subscriber
$to_subscriber = $email;
$subject_subscriber = "Thanks for subscribing";
$message_subscriber = "Thank you for subscribing to our Newsletter!";
$headers_subscriber = "From: info@metaspaceconsult.com";
mail($to_subscriber, $subject_subscriber, $message_subscriber, $headers_subscriber);

// Send email to your website email address
$to_website = "info@metaspaceconsult.com";
$subject_website = "New subscriber";
$message_website = "A new subscriber has signed up for your newsletter.\r\nEmail address: " . $email;
$headers_website = "From: info@metaspaceconsult.com";
mail($to_website, $subject_website, $message_website, $headers_website);

// Redirect the subscriber to a thank you page
header("Location: thank_you.html");
exit;
?>