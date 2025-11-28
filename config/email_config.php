<?php
// SMTP Email Configuration
// Update these settings with your SMTP server details

define('SMTP_HOST', 'smtp.bookride.in'); // Your SMTP server (e.g., smtp.gmail.com, smtp.outlook.com)
define('SMTP_PORT', 587); // SMTP port (587 for TLS, 465 for SSL, 25 for non-encrypted)
define('SMTP_USERNAME', 'bookings@bookride.com'); // Your email address
define('SMTP_PASSWORD', 'AmitAswal@123#'); // Your email password or app password
define('SMTP_FROM_EMAIL', 'your-email@gmail.com'); // Email address to send from
define('SMTP_FROM_NAME', 'BookRide'); // Name to display as sender
define('SMTP_TO_EMAIL', 'bookings@bookride.in'); // Email address to receive contact form submissions
define('SMTP_ENCRYPTION', 'tls'); // Encryption type: 'tls', 'ssl', or '' for none

// Enable/Disable email sending (set to false for testing)
define('SMTP_ENABLED', true);

?>

