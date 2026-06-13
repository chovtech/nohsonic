<?php
ini_set('display_errors', 0);
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

$fname   = trim(strip_tags($_POST['fname']   ?? ''));
$lname   = trim(strip_tags($_POST['lname']   ?? ''));
$email   = trim(filter_var($_POST['email']   ?? '', FILTER_SANITIZE_EMAIL));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

if (!$fname || !$lname || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$phone || !$message) {
    echo 'Please fill in all required fields with a valid email address.';
    exit;
}

$to      = 'info@npc.clinic';
$subject = "Website Enquiry from $fname $lname";
$body    = "Name: $fname $lname\r\nEmail: $email\r\nPhone: $phone\r\n\r\nMessage:\r\n$message";
$headers = implode("\r\n", [
    "From: NOHSONIC Website <no-reply@npc.clinic>",
    "Reply-To: $email",
    "MIME-Version: 1.0",
    "Content-Type: text/plain; charset=UTF-8",
]);

if (mail($to, $subject, $body, $headers)) {
    echo 'success';
} else {
    echo 'Sorry, there was a problem sending your message. Please call us on 09023333331 / 08131555597 or email info@npc.clinic directly.';
}
