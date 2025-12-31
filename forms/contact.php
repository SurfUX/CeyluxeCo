<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    exit("Forbidden");
}

function clean($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

$name    = clean($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone   = clean($_POST['phone'] ?? '');
$subject = clean($_POST['subject'] ?? 'Contact Form');
$message = clean($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    exit("Required fields missing.");
}

/* ✅ YOUR RECEIVING EMAIL */
$to = "contact@surfux.com";

/* ✅ MUST BE SAME DOMAIN */
$fromEmail = "contact@surfux.com";
$fromName  = "Surfux Website";

/* ✅ HEADERS */
$headers  = "From: $fromName <$fromEmail>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

/* ✅ EMAIL BODY */
$body  = "New Contact Form Submission\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Subject: $subject\n\n";
$body .= "Message:\n$message\n";

/* ✅ SEND MAIL */
if (mail($to, $subject, $body, $headers)) {
    echo "success";
} else {
    echo "error";
}
