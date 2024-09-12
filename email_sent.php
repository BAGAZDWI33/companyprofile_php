<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "info@alfazza.my.id";
        $subject = "Newsletter Subscription";
        $message = "Email: " . $email . " telah berlangganan newsletter.";
        $headers = "From: no-reply@yourdomain.com" . "\r\n" .
            "Reply-To: no-reply@yourdomain.com" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Mengirim email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email berhasil terkirim.";
        } else {
            echo "Email gagal terkirim.";
        }
    } else {
        echo "Email tidak valid.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
