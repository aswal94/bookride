<?php 
session_start();
require_once '../includes/process_booking.php';
$pageTitle = "Delhi Dehradun Taxi Service";
include '../includes/header.php'; 
?>

<!-- Hero Section with Booking Form -->
<section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&w=1920" alt="Taxi" class="w-full h-full object-cover">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Book Your Ride <br> Anytime, Anywhere
                </h1>
                <p class="text-xl mb-8 text-blue-100">
                    Delhi to Dehradun, Rishikesh, Haridwar Taxi Service
                </p>
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-shield-alt text-2xl"></i>
                        <span>Safe & Secure</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-clock text-2xl"></i>
                        <span>24/7 Available</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-dollar-sign text-2xl"></i>
                        <span>Best Prices</span>
                    </div>
                </div>
            </div>
            
            <!-- Booking Form -->
            <?php include '../includes/booking_form.php'; ?>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose BookRide?</h2>
            <p class="text-gray-600 text-lg">We provide the best taxi service experience</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Safe & Secure</h3>
                <p class="text-gray-600">All our drivers are verified and vehicles are regularly maintained for your safety.</p>
            </div>
            
            <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">24/7 Service</h3>
                <p class="text-gray-600">Available round the clock to serve you whenever you need us.</p>
            </div>
            
            <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-dollar-sign text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Affordable Prices</h3>
                <p class="text-gray-600">Competitive pricing with transparent fare calculation, no hidden charges.</p>
            </div>
            
            <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-mobile-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Easy Booking</h3>
                <p class="text-gray-600">Simple and quick booking process with instant confirmation.</p>
            </div>
            
            <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Experienced Drivers</h3>
                <p class="text-gray-600">Professional and courteous drivers with years of experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-gray-600 text-lg">Explore our range of taxi services</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Airport Transfer" class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Airport Transfer</h3>
                    <p class="text-gray-600 text-sm">Reliable airport pickup and drop service.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="h-48 overflow-hidden">
                <img src="https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Airport Transfer" class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Outstation Rides</h3>
                    <p class="text-gray-600 text-sm">Long-distance trips with comfortable vehicles like Innova & Ertiga and experienced drivers.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                <div class="h-48 overflow-hidden">
                <img src="https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Airport Transfer" class="w-full h-full object-cover hover:scale-110 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">City Rides</h3>
                    <p class="text-gray-600 text-sm">Quick and efficient city rides with Swift and other compact cars for your daily commute needs.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="/service" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                View All Services
            </a>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>

