<?php 
$pageTitle = "Refund Policy";
include '../includes/header.php'; 
?>

<!-- Page Header -->
<section class="bg-gradient-to-r from-yellow-600 to-yellow-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Refund Policy</h1>
        <p class="text-xl text-yellow-100">Our commitment to fair and transparent refunds</p>
    </div>
</section>

<!-- Refund Policy Content -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <p class="text-gray-600 mb-6">
                <strong>Last Updated:</strong> <?php echo date('F j, Y'); ?>
            </p>
            
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">1. Overview</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    At BookRide, we strive to provide excellent service. This Refund Policy outlines the circumstances under which refunds may be issued and the process for requesting a refund.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">2. Refund Eligibility</h2>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">2.1 Customer Cancellations</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Refunds for customer-initiated cancellations are processed as follows:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                    <li><strong>More than 2 hours before pickup:</strong> 100% refund (processing fee may apply)</li>
                    <li><strong>1-2 hours before pickup:</strong> 50% refund</li>
                    <li><strong>Less than 1 hour before pickup:</strong> No refund</li>
                    <li><strong>No-show:</strong> No refund</li>
                </ul>

                <h3 class="text-2xl font-semibold text-gray-800 mb-3">2.2 Service Provider Cancellations</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    If BookRide or the assigned driver cancels your booking:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                    <li>Full refund will be processed automatically</li>
                    <li>Refund will be credited to your original payment method within 5-7 business days</li>
                    <li>You will receive a notification via email/SMS</li>
                </ul>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">3. Refund Scenarios</h2>
                
                <div class="bg-yellow-50 p-6 rounded-lg mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">3.1 Full Refund Scenarios</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Driver cancellation or no-show</li>
                        <li>Vehicle breakdown or technical issues</li>
                        <li>Incorrect fare charged due to system error</li>
                        <li>Service not provided as booked</li>
                        <li>Safety concerns or driver misconduct</li>
                        <li>Cancellation by BookRide due to operational reasons</li>
                    </ul>
                </div>

                <div class="bg-yellow-50 p-6 rounded-lg mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">3.2 Partial Refund Scenarios</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Customer cancellation 1-2 hours before pickup: 50% refund</li>
                        <li>Route change requested by customer: Difference in fare refunded</li>
                        <li>Early drop-off: Pro-rated refund based on unused distance</li>
                    </ul>
                </div>

                <div class="bg-red-50 p-6 rounded-lg mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">3.3 No Refund Scenarios</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Customer cancellation less than 1 hour before pickup</li>
                        <li>Customer no-show at pickup location</li>
                        <li>Ride completed as per booking</li>
                        <li>Customer misconduct or violation of terms</li>
                        <li>Damage to vehicle caused by customer</li>
                    </ul>
                </div>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">4. Refund Processing</h2>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">4.1 Processing Time</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Refunds are processed as follows:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                    <li><strong>Online Payments (Card/UPI/Digital Wallet):</strong> 5-7 business days</li>
                    <li><strong>Cash Payments:</strong> Refund credited to BookRide wallet or bank account (7-10 business days)</li>
                    <li><strong>Wallet Credits:</strong> Instant refund to BookRide wallet</li>
                </ul>

                <h3 class="text-2xl font-semibold text-gray-800 mb-3">4.2 Refund Method</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Refunds will be processed to the original payment method used for the booking. If the original payment method is unavailable, refunds may be credited to your BookRide wallet or bank account.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">5. How to Request a Refund</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    To request a refund, please follow these steps:
                </p>
                <ol class="list-decimal list-inside text-gray-600 mb-4 space-y-2">
                    <li>Log in to your BookRide account</li>
                    <li>Go to "My Bookings" section</li>
                    <li>Select the booking for which you want a refund</li>
                    <li>Click on "Request Refund"</li>
                    <li>Provide reason for refund request</li>
                    <li>Submit the request</li>
                </ol>
                <p class="text-gray-600 leading-relaxed">
                    Alternatively, you can contact our customer support team at <strong>(+91)925 800 2554</strong> or email us at <strong>support@bookride.in</strong> with your booking ID and refund request.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">6. Refund Disputes</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    If you are not satisfied with a refund decision, you can:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                    <li>Contact our customer support team for review</li>
                    <li>Provide additional documentation or evidence</li>
                    <li>Request escalation to our management team</li>
                </ul>
                <p class="text-gray-600 leading-relaxed">
                    All disputes will be reviewed within 48 hours, and you will be notified of the decision.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">7. Processing Fees</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    In certain cases, a processing fee may be deducted from the refund amount:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                    <li>Customer-initiated cancellations: ₹50 or 2% of booking amount (whichever is lower)</li>
                    <li>No processing fee for service provider cancellations or technical issues</li>
                </ul>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">8. Special Cases</h2>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">8.1 Outstation Bookings</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    For outstation bookings, cancellation and refund policies may vary. Please refer to the specific terms mentioned at the time of booking.
                </p>

                <h3 class="text-2xl font-semibold text-gray-800 mb-3">8.2 Promotional Offers</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Bookings made using promotional codes or discounts are subject to the refund policy applicable to the base fare amount.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">9. Contact Us</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    For any questions or assistance regarding refunds, please contact us:
                </p>
                <div class="bg-yellow-50 p-6 rounded-lg">
                    <p class="text-gray-700 mb-2"><strong>Email:</strong> support@bookride.in</p>
                    <p class="text-gray-700 mb-2"><strong>Phone:</strong> (+91)925 800 2554</p>
                    <p class="text-gray-700 mb-2"><strong>Support Hours:</strong> 24/7</p>
                    <p class="text-gray-700"><strong>Address:</strong> Raipur, Dehradun, Uttarakhand, 248001</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

