<?php 
$pageTitle = "Contact Us";
include '../includes/header.php'; 
require_once '../includes/send_email.php';
require_once '../config/email_config.php';

// Handle form submission
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject_input = htmlspecialchars($_POST['subject'] ?? '');
    $message_content = htmlspecialchars($_POST['message'] ?? '');
    
    if (!empty($name) && !empty($email) && !empty($message_content)) {
        // Prepare email content
        $email_subject = !empty($subject_input) ? $subject_input : 'Contact Form Submission from BookRide';
        $email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #2563eb; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9fafb; padding: 20px; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #2563eb; }
                .value { margin-top: 5px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Name:</div>
                        <div class='value'>{$name}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Email:</div>
                        <div class='value'>{$email}</div>
                    </div>
                    " . (!empty($phone) ? "
                    <div class='field'>
                        <div class='label'>Phone:</div>
                        <div class='value'>{$phone}</div>
                    </div>
                    " : "") . "
                    " . (!empty($subject_input) ? "
                    <div class='field'>
                        <div class='label'>Subject:</div>
                        <div class='value'>{$subject_input}</div>
                    </div>
                    " : "") . "
                    <div class='field'>
                        <div class='label'>Message:</div>
                        <div class='value'>" . nl2br($message_content) . "</div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Send email
        $result = sendSMTPEmail(
            SMTP_TO_EMAIL,
            $email_subject,
            $email_body,
            SMTP_FROM_EMAIL,
            SMTP_FROM_NAME
        );
        
        if ($result['success']) {
            $message = 'Thank you for contacting us! We have received your message and will get back to you soon.';
            $messageType = 'success';
            
            // Optionally send auto-reply to user
            $auto_reply_subject = 'Thank you for contacting BookRide';
            $auto_reply_body = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
                    <div style='background-color: #2563eb; color: white; padding: 20px; text-align: center;'>
                        <h2>Thank You for Contacting BookRide</h2>
                    </div>
                    <div style='background-color: #f9fafb; padding: 20px;'>
                        <p>Dear {$name},</p>
                        <p>Thank you for reaching out to us. We have received your message and our team will review it shortly.</p>
                        <p>We typically respond within 24 hours. If your inquiry is urgent, please call us at (+91)925 800 2554.</p>
                        <p>Best regards,<br>The BookRide Team</p>
                    </div>
                </div>
            </body>
            </html>
            ";
            
            sendSMTPEmail($email, $auto_reply_subject, $auto_reply_body, SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        } else {
            $message = 'Thank you for your message. However, there was an issue sending your email. Please try calling us at (+91)925 800 2554 or email us directly at info@bookride.in';
            $messageType = 'error';
        }
    } else {
        $message = 'Please fill in all required fields.';
        $messageType = 'error';
    }
}
?>

<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl text-blue-100">We're here to help! Get in touch with us</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if ($message): ?>
            <div class="mb-8 p-4 rounded-lg <?php echo $messageType === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                <form action="/contact" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 text-sm font-medium mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900"
                            placeholder="Enter your full name">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900"
                                placeholder="your@email.com">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900"
                                placeholder="+91 123-456-7890">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-gray-700 text-sm font-medium mb-2">
                            Subject
                        </label>
                        <input type="text" id="subject" name="subject"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900"
                            placeholder="What is this regarding?">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-gray-700 text-sm font-medium mb-2">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900"
                            placeholder="Tell us how we can help you..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition transform hover:scale-105">
                        <i class="fas fa-paper-plane mr-2"></i>Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div>
                <div class="mb-6 rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Contact Us" class="w-full h-48 object-cover">
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                <p class="text-gray-600 mb-8">
                    Have a question or need assistance? We're here to help. Reach out to us through any of the following channels.
                </p>
                
                <div class="space-y-6">
                    <!-- Phone -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <i class="fas fa-phone text-blue-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-1">Phone</h3>
                            <a href="tel:+911234567890" class="text-blue-600 hover:text-blue-700 font-medium">
                            (+91)925 800 2554
                            </a>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <i class="fas fa-envelope text-blue-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-1">Email</h3>
                            <a href="mailto:info@bookride.in" class="text-blue-600 hover:text-blue-700 font-medium">
                                info@bookride.in
                            </a>
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <i class="fas fa-map-marker-alt text-blue-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-1">Address</h3>
                            <address class="text-gray-700 not-italic">
                               Raipur, Dehradun, Uttarakhand, 248001
                            </address>
                        </div>
                    </div>
                    
               
                
            </div>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>

