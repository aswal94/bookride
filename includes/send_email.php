<?php
/**
 * Simple SMTP Email Sender
 * Sends emails using SMTP without requiring external libraries
 */

function sendSMTPEmail($to, $subject, $message, $from_email, $from_name) {
    require_once __DIR__ . '/../config/email_config.php';
    
    if (!SMTP_ENABLED) {
        return ['success' => false, 'message' => 'Email sending is disabled'];
    }
    
    // Email headers
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=UTF-8";
    $headers[] = "From: " . $from_name . " <" . $from_email . ">";
    $headers[] = "Reply-To: " . $from_email;
    $headers[] = "X-Mailer: PHP/" . phpversion();
    
    $headers_string = implode("\r\n", $headers);
    
    // Try to send email using PHP mail() function
    // Note: For proper SMTP, you may need to configure php.ini or use PHPMailer
    $mail_sent = @mail($to, $subject, $message, $headers_string);
    
    if ($mail_sent) {
        return ['success' => true, 'message' => 'Email sent successfully'];
    } else {
        return ['success' => false, 'message' => 'Failed to send email. Please check your server configuration.'];
    }
}

/**
 * Advanced SMTP Email Sender using PHPMailer
 * Requires PHPMailer library (install via Composer: composer require phpmailer/phpmailer)
 */
function sendSMTPEmailAdvanced($to, $subject, $message, $from_email, $from_name, $reply_to = '') {
    require_once __DIR__ . '/../config/email_config.php';
    
    if (!SMTP_ENABLED) {
        return ['success' => false, 'message' => 'Email sending is disabled'];
    }
    
    // Check if PHPMailer is available
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        // Fallback to simple mail function
        return sendSMTPEmail($to, $subject, $message, $from_email, $from_name);
    }
    
    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
        $mail->Port = SMTP_PORT;
        $mail->CharSet = 'UTF-8';
        
        // Recipients
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress($to);
        
        if (!empty($reply_to)) {
            $mail->addReplyTo($reply_to);
        }
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = strip_tags($message);
        
        $mail->send();
        return ['success' => true, 'message' => 'Email sent successfully'];
        
    } catch (Exception $e) {
        return ['success' => false, 'message' => 'Email could not be sent. Error: ' . $mail->ErrorInfo];
    }
}

?>

