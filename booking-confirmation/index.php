<?php 
session_start();
$pageTitle = "Booking Confirmation";
include '../includes/header.php'; 

// Get booking details from session if available
$booking_name = $_SESSION['booking_name'] ?? '';
$booking_phone = $_SESSION['booking_phone'] ?? '';
$booking_pickup = $_SESSION['booking_pickup'] ?? '';
$booking_date = $_SESSION['booking_date'] ?? '';

// Clear session data after displaying
unset($_SESSION['booking_name']);
unset($_SESSION['booking_phone']);
unset($_SESSION['booking_pickup']);
unset($_SESSION['booking_date']);
?>

<!-- Confirmation Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="mb-6">
            <div class="bg-white bg-opacity-20 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check-circle text-5xl"></i>
            </div>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Enquiry Submitted Successfully!</h1>
        <p class="text-xl text-blue-100">Thank you for choosing BookRide</p>
    </div>
</section>

<!-- Confirmation Content -->
<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8 rounded-r-lg">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500 text-2xl"></i>
                </div>
                <div class="ml-3">
                    <h3 class="text-lg font-semibold text-green-800 mb-2">Enquiry Sent Successfully</h3>
                    <p class="text-green-700">
                        Your enquiry has been submitted successfully and our team will contact you shortly to confirm your ride.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8 rounded-r-lg">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-phone text-blue-500 text-2xl"></i>
                </div>
                <div class="ml-3">
                    <h3 class="text-lg font-semibold text-blue-800 mb-2">You Will Receive a Callback</h3>
                    <p class="text-blue-700">
                        Our customer service team will call you within the next few hours to confirm your booking details and provide you with the best quote.
                    </p>
                </div>
            </div>
        </div>

        <?php if (!empty($booking_name) || !empty($booking_phone) || !empty($booking_pickup) || !empty($booking_date)): ?>
        <div class="bg-gray-50 rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Booking Details</h2>
            <div class="space-y-3">
                <?php if (!empty($booking_name)): ?>
                <div class="flex items-center">
                    <i class="fas fa-user text-blue-600 mr-3 w-5"></i>
                    <div>
                        <span class="text-gray-600">Name:</span>
                        <span class="text-gray-900 font-semibold ml-2"><?php echo htmlspecialchars($booking_name); ?></span>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($booking_phone)): ?>
                <div class="flex items-center">
                    <i class="fas fa-phone text-blue-600 mr-3 w-5"></i>
                    <div>
                        <span class="text-gray-600">Phone:</span>
                        <span class="text-gray-900 font-semibold ml-2"><?php echo htmlspecialchars($booking_phone); ?></span>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($booking_pickup)): ?>
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt text-blue-600 mr-3 w-5"></i>
                    <div>
                        <span class="text-gray-600">Pickup Location:</span>
                        <span class="text-gray-900 font-semibold ml-2"><?php echo htmlspecialchars($booking_pickup); ?></span>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($booking_date)): ?>
                <div class="flex items-center">
                    <i class="fas fa-calendar text-blue-600 mr-3 w-5"></i>
                    <div>
                        <span class="text-gray-600">Date:</span>
                        <span class="text-gray-900 font-semibold ml-2"><?php echo date('F j, Y', strtotime($booking_date)); ?></span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold text-gray-900 mb-4">What Happens Next?</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-blue-100 rounded-full p-2">
                        <span class="text-blue-600 font-bold">1</span>
                    </div>
                    <div class="ml-4">
                        <h3 class="font-semibold text-gray-900">Our Team Reviews Your Request</h3>
                        <p class="text-gray-600 text-sm">We'll review your booking details and check driver availability.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-blue-100 rounded-full p-2">
                        <span class="text-blue-600 font-bold">2</span>
                    </div>
                    <div class="ml-4">
                        <h3 class="font-semibold text-gray-900">You Receive a Callback</h3>
                        <p class="text-gray-600 text-sm">Our customer service team will call you to confirm details and provide pricing.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-blue-100 rounded-full p-2">
                        <span class="text-blue-600 font-bold">3</span>
                    </div>
                    <div class="ml-4">
                        <h3 class="font-semibold text-gray-900">Booking Confirmed</h3>
                        <p class="text-gray-600 text-sm">Once confirmed, you'll receive all the details via Whatsapp Message.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center space-y-4">
            <div class="bg-blue-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Need Immediate Assistance?</h3>
                <p class="text-gray-600 mb-4">Call us directly for instant booking</p>
                <a href="tel:+919258002554" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition transform hover:scale-105">
                    <i class="fas fa-phone mr-2"></i>(+91)925 800 2554
                </a>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-8 rounded-lg transition">
                    <i class="fas fa-home mr-2"></i>Back to Home
                </a>
                <a href="/service" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition">
                    <i class="fas fa-car mr-2"></i>View Services
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

