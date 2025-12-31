<?php
// Allow only POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    exit;
}

// Clean input function
function clean($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Get form data
$name    = clean($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone   = clean($_POST['phone'] ?? '');
$subject = clean($_POST['subject'] ?? 'Website Contact');
$message = clean($_POST['message'] ?? '');

// Validate required fields
if (!$name || !$email || !$message) {
    http_response_code(400);
    exit;
}

/* ✅ MULTIPLE RECEIVERS */
$to = "contact@surfux.com, Info@ceyluxeco.com";

/* ✅ BRANDING (THIS FIXES YOUR ISSUE) */
$fromEmail = "Info@ceyluxeco.com";          // sender email
$fromName  = "Ceyluxeco Exports (Pvt) Ltd"; // sender name shown in inbox

// Email headers
$headers  = "From: $fromName <$fromEmail>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Email body
$body  = "New Contact Form Submission\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Subject: $subject\n\n";
$body .= "Message:\n$message\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
    exit;
} else {
    http_response_code(500);
    exit;
}
