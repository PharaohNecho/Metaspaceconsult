
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $to = 'info@metaspaceconsult.com'; 
    $subject = 'New message from your website';
    $headers = "From: $name <$email>";
    $body = "Name: $firstname\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message!';
        header("Location: thank_you.html");
    } else {
        echo 'Sorry, there was a problem sending your message.';
    }
exit;
}
?>
