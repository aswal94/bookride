<?php
/**
 * Process booking form submission and send email
 * Include this file at the top of pages that use the booking form
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['number']) && isset($_POST['pickup']) && isset($_POST['date'])) {
    require_once __DIR__ . '/send_email.php';
    require_once __DIR__ . '/send_discord.php';
    require_once __DIR__ . '/../config/email_config.php';
    
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['number'] ?? '');
    $pickup = htmlspecialchars($_POST['pickup'] ?? '');
    $date = htmlspecialchars($_POST['date'] ?? '');
    
    if (!empty($name) && !empty($phone) && !empty($pickup) && !empty($date)) {
        // Prepare email content
        $email_subject = 'New Booking Request - BookRide';
        $email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #eab308; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9fafb; padding: 20px; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #eab308; }
                .value { margin-top: 5px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Booking Request</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Name:</div>
                        <div class='value'>{$name}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Phone Number:</div>
                        <div class='value'>{$phone}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Pickup Location:</div>
                        <div class='value'>{$pickup}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Date:</div>
                        <div class='value'>{$date}</div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Send email to admin
        $result = sendSMTPEmail(
            SMTP_TO_EMAIL,
            $email_subject,
            $email_body,
            SMTP_FROM_EMAIL,
            SMTP_FROM_NAME
        );
        
        // Send booking details to Discord
        $discord_fields = [
            [
                'name' => '👤 Name',
                'value' => $name,
                'inline' => true
            ],
            [
                'name' => '📞 Phone',
                'value' => $phone,
                'inline' => true
            ],
            [
                'name' => '📍 Pickup Location',
                'value' => $pickup,
                'inline' => false
            ],
            [
                'name' => '📅 Date',
                'value' => date('F j, Y', strtotime($date)),
                'inline' => true
            ],
            [
                'name' => '⏰ Time',
                'value' => date('H:i:s'),
                'inline' => true
            ]
        ];
        
        sendToDiscord(
            '🚕 New Booking Request',
            'A new booking enquiry has been received!',
            $discord_fields,
            16776960 // Yellow color
        );
        
        // Store booking details in session for confirmation page
        $_SESSION['booking_name'] = $name;
        $_SESSION['booking_phone'] = $phone;
        $_SESSION['booking_pickup'] = $pickup;
        $_SESSION['booking_date'] = $date;
        
        // Redirect to confirmation page
        header('Location: /booking-confirmation');
        exit;
    }
}
?>

