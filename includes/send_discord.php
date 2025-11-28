<?php
/**
 * Send notification to Discord webhook
 */

function sendToDiscord($title, $description, $fields = [], $color = 16776960) {
    require_once __DIR__ . '/../config/email_config.php';
    
    if (!DISCORD_ENABLED || empty(DISCORD_WEBHOOK_URL) || DISCORD_WEBHOOK_URL === 'YOUR_DISCORD_WEBHOOK_URL_HERE') {
        return ['success' => false, 'message' => 'Discord webhook not configured'];
    }
    
    // Prepare Discord embed
    $embed = [
        'title' => $title,
        'description' => $description,
        'color' => $color, // Yellow color (16776960) in decimal
        'fields' => $fields,
        'timestamp' => date('c'), // ISO 8601 format
        'footer' => [
            'text' => 'BookRide Booking System'
        ]
    ];
    
    $payload = [
        'embeds' => [$embed]
    ];
    
    // Send to Discord webhook
    $ch = curl_init(DISCORD_WEBHOOK_URL);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode >= 200 && $httpCode < 300) {
        return ['success' => true, 'message' => 'Discord notification sent successfully'];
    } else {
        return ['success' => false, 'message' => 'Failed to send Discord notification. HTTP Code: ' . $httpCode];
    }
}

?>

