<?php
ini_set('display_errors', 0);
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

$name     = trim(strip_tags($_POST['name']     ?? ''));
$email    = trim(filter_var($_POST['email']    ?? '', FILTER_SANITIZE_EMAIL));
$phone    = trim(strip_tags($_POST['phone']    ?? ''));
$services = trim(strip_tags($_POST['services'] ?? ''));
$date     = trim(strip_tags($_POST['date']     ?? ''));
$time     = trim(strip_tags($_POST['time']     ?? ''));

if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$phone || !$services || !$date || !$time) {
    echo 'Please fill in all required fields with a valid email address.';
    exit;
}

$to      = 'info@npc.clinic';
$subject = "Appointment Request from $name";
$body    = implode("\r\n", [
    "Name:    $name",
    "Email:   $email",
    "Phone:   $phone",
    "Service: $services",
    "Date:    $date",
    "Time:    $time",
]);
$headers = implode("\r\n", [
    "From: NOHSONIC Website <no-reply@npc.clinic>",
    "Reply-To: $email",
    "MIME-Version: 1.0",
    "Content-Type: text/plain; charset=UTF-8",
]);

if (mail($to, $subject, $body, $headers)) {
    echo 'success';
} else {
    echo 'Sorry, we could not process your request. Please call us on 09023333331 / 08131555597 or email info@npc.clinic directly.';
}
