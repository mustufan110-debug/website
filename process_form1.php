<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/mailer_config.php'; // SMTP_HOST, SMTP_USER, SMTP_PASS, SMTP_PORT
session_start();
header('Content-Type: application/json');

/* ---- 0. Security Layer ---- */

/* --- CSRF token check --- */
if (!isset($_POST['_token']) || !hash_equals($_SESSION['_token'] ?? '', $_POST['_token'])) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid request. Please refresh the page.']);
    exit;
}

/* --- Rate-limit 10 s per IP (simple) --- */
$limiterKey = 'ip_' . $_SERVER['REMOTE_ADDR'];
if (isset($_SESSION[$limiterKey]) && (time() - $_SESSION[$limiterKey]) < 10) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Please wait 10sec before submitting again.']);
    exit;
}
$_SESSION[$limiterKey] = time();

/* 1. CAPTCHA Validation (SERVER-SIDE) */
$userCaptcha = strtoupper(trim($_POST['captcha'] ?? ''));
$expectedCaptcha = strtoupper(trim($_SESSION['captcha'] ?? ''));

if (empty($userCaptcha) || empty($expectedCaptcha) || $userCaptcha !== $expectedCaptcha) {
    echo json_encode(['success' => false, 'message' => 'Wrong CAPTCHA. Please try again.']);
    exit;
}

/* 2. Sanitize & validate (field-by-field) */
function sanitize($x) {
    return htmlspecialchars(strip_tags(trim($x)), ENT_QUOTES, 'UTF-8');
}

$name     = sanitize($_POST['name']    ?? '');
$email    = sanitize($_POST['email']   ?? '');
$phone    = sanitize($_POST['phone']   ?? '');
$service  = sanitize($_POST['transport'] ?? $_POST['service'] ?? ''); // Handles both quote and contact forms
$message  = sanitize($_POST['message'] ?? '');
$formType = sanitize($_POST['form_type'] ?? 'unknown');

// Basic email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

/* --- Validation for required fields --- */
$required = [];
if ($formType === 'quote' || $formType === 'contact') {
    $required = ['name' => $name, 'email' => $email, 'phone' => $phone, 'service' => $service];
} elseif ($formType === 'career') {
    $required = ['name' => $name, 'email' => $email];
}

foreach ($required as $key => $value) {
    if (empty($value)) {
        echo json_encode(['success' => false, 'message' => ucfirst($key) . ' is a required field.']);
        exit;
    }
}

/* 3. Send e-mail */
$mail = new PHPMailer(true);

// === THIS IS THE ADDED DEBUG LINE ===
// It will output the full connection log.
//$mail->SMTPDebug = 2; 
// ===================================

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = SMTP_PORT;

    // === EMAIL 1: SEND NOTIFICATION TO COMPANY ===
    $mail->setFrom(SMTP_USER, 'Eastern Cargo Website');
    //$mail->addAddress('info@easterncargo.co.in');
    //$mail->addAddress('lseth@easterncargo.co.in');
    $mail->addAddress('it@easterncargo.co.in');
    $mail->addAddress('kferreira@easterncargo.co.in');
    $mail->addReplyTo($email, $name);
    
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8'; //
    $mail->Subject = "New {$formType} submission from your website";
    $body = "<h2>New " . ucfirst($formType) . " Request</h2>
             <p><strong>Name:</strong> {$name}</p>
             <p><strong>Email:</strong> {$email}</p>";
    if(!empty($phone)) $body .= "<p><strong>Phone:</strong> {$phone}</p>";
    if(!empty($service)) $body .= "<p><strong>Service:</strong> {$service}</p>";
    if(!empty($message)) $body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
    $mail->Body = $body;

    if ($formType === 'career' && isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $allowed = ['pdf', 'doc', 'docx'];
        $ext = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed)) throw new Exception('Invalid file type.');
        if ($_FILES['resume']['size'] > 5 * 1024 * 1024) throw new Exception('File too large (Max 5MB).');
        
        $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
    }

    $mail->send();

    // === START: AUTO-REPLY LOGIC ===

    // 1. Clear previous recipients and attachments for the new email
    $mail->clearAllRecipients();
    $mail->clearReplyTos();
    $mail->clearAttachments();

    // 2. Set the user as the recipient
    $mail->addAddress($email, $name);

    // 3. Set a new subject and craft the professional auto-reply body
    $mail->Subject = 'Confirmation of Your Inquiry - Eastern Cargo Carriers (I) Pvt. Ltd.';

    // Determine the type of inquiry for the message
    $inquiryType = '';
    switch ($formType) {
        case 'quote':
            $inquiryType = 'request for a quote';
            break;
        case 'contact':
            $inquiryType = 'inquiry';
            break;
        case 'career':
            $inquiryType = 'career application';
            break;
        default:
            $inquiryType = 'submission';
            break;
    }

    // Construct the professional HTML email body using a HEREDOC string
    $autoReplyBody = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { text-align: center; border-bottom: 1px solid #ddd; padding-bottom: 10px; margin-bottom: 20px; }
        .header img { max-width: 200px; }
        .footer { font-size: 0.9em; color: #777; margin-top: 20px; border-top: 1px solid #ddd; padding-top: 10px; text-align: center; }
        .footer a { color: #0056b3; }
        strong { color: #1a5f7a; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://easterncargo.co.in/images/logo.png" alt="Eastern Cargo Carriers Logo">
        </div>
        <p>Dear {$name},</p>
        <p>Thank you for reaching out to Eastern Cargo Carriers (I) Pvt. Ltd. We confirm that we have successfully received your {$inquiryType}.</p>
        <p>Our dedicated team is now reviewing your submission. We prioritize every inquiry and will provide a personal response within one business day.</p>
        <p>Should your matter be urgent, please do not hesitate to contact us directly at <a href="tel:+912267539999">+91-22-67539999</a>.</p>
        <p>We appreciate your interest in our services and look forward to assisting you.</p>
        <br>
        <p>Sincerely,</p>
        <p><strong>The Team at Eastern Cargo Carriers (I) Pvt. Ltd.</strong></p>
        <div class="footer">
            <p>
                Eastern Cargo Carriers (I) Pvt. Ltd.<br>
                Unit #25/26/27, Adarsh Industrial Estate, Sahar Road, Chakala, Andheri (East), Mumbai – 400 099<br>
                <a href="https://easterncargo.co.in">www.easterncargo.co.in</a>
            </p>
            <p><em>This is an automated confirmation. Please do not reply directly to this email.</em></p>
        </div>
    </div>
</body>
</html>
HTML;

    $mail->Body = $autoReplyBody;
    
    // 4. Send the confirmation email
    $mail->send();
    // === END: AUTO-REPLY LOGIC ===


    // Clear session variables on success of BOTH emails
    unset($_SESSION['captcha']);
    unset($_SESSION[$limiterKey]);
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Message could not be sent. Please try again later."]);
}

?>