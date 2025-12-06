    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold text-yellow-600 mb-4">
                        <!-- <i class="fas fa-taxi mr-2"></i> -->
                        <img src="/images/logo.png" alt="BookRide Logo" width="150px" />
                    </h3>
                    <p class="text-gray-400 mb-4">
                        Your trusted partner taxi services. We're committed to making your journey seamless.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-yellow-600 transition">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-yellow-600 transition">About Us</a></li>
                        <li><a href="/service" class="text-gray-400 hover:text-yellow-600 transition">Services</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-yellow-600 transition">Contact</a></li>
                        <li><a href="/#book" class="text-gray-400 hover:text-yellow-600 transition">Book Now</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2 text-yellow-600"></i>
                            <span>(+91)925 800 2554</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-yellow-600"></i>
                            <span>info@bookride.in</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-2 text-yellow-600 mt-1"></i>
                            <span>Raipur, Dehradun, Uttarakhand, 248001</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-400">&copy; <?php echo date('Y'); ?> BookRide. All rights reserved.</p>
                    <div class="flex flex-wrap justify-center gap-4 text-gray-400 text-sm">
                        <a href="/privacy-policy" class="hover:text-yellow-600 transition">Privacy Policy</a>
                        <span class="text-gray-600">|</span>
                        <a href="/terms-conditions" class="hover:text-yellow-600 transition">Terms & Conditions</a>
                        <span class="text-gray-600">|</span>
                        <a href="/refund-policy" class="hover:text-yellow-600 transition">Refund Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Floating Action Buttons (WhatsApp & Call) -->
    <div class="fixed bottom-6 left-4 right-4  z-50 flex justify-between items-end pointer-events-none">
        <!-- WhatsApp Button (Left) -->
        <a href="https://wa.me/919258002554?text=Hello%2C%20I%20would%20like%20to%20book%20a%20ride" 
           target="_blank" 
           rel="noopener noreferrer"
           class="bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-lg hover:shadow-xl transition-all duration-300 pointer-events-auto flex items-center justify-center w-14 h-14 animate-bounce">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
        
        <!-- Call Button (Right) -->
        <a href="tel:+919258002554" 
           class="bg-yellow-600 hover:bg-yellow-700 text-white rounded-full p-4 shadow-lg hover:shadow-xl transition-all duration-300 pointer-events-auto flex items-center justify-center w-14 h-14 animate-bounce"
           style="animation-delay: 0.2s;">
            <i class="fas fa-phone text-xl"></i>
        </a>
    </div>
</body>
</html>


