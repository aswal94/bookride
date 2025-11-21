<?php 
$pageTitle = "Contact Us";
include '../includes/header.php'; 

// Handle form submission
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message_content = htmlspecialchars($_POST['message'] ?? '');
    
    if (!empty($name) && !empty($email) && !empty($message_content)) {
        // Here you would typically send an email or save to database
        // For now, we'll just show a success message
        $message = 'Thank you for contacting us! We will get back to you soon.';
        $messageType = 'success';
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
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            placeholder="Enter your full name">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="your@email.com">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="+91 123-456-7890">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-gray-700 text-sm font-medium mb-2">
                            Subject
                        </label>
                        <input type="text" id="subject" name="subject"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            placeholder="What is this regarding?">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-gray-700 text-sm font-medium mb-2">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent"
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

