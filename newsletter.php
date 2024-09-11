<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $email = $_POST['email'];

    // Email tujuan
    $to = "info@alfazza.my.id";
    $subject = "New Subscription";
    $message = "A new user has subscribed with the email: " . $email;
    $headers = "From: petanimilenial_indo.com";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for subscribing!";
    } else {
        echo "Sorry, there was an error. Please try again.";
    }
}
