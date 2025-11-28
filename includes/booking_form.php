<!-- Booking Form -->
<div id="book" class="bg-white rounded-lg shadow-2xl p-6 md:p-8">
    <?php if (isset($_SESSION['booking_message'])): ?>
        <div class="mb-6 p-4 rounded-lg <?php echo $_SESSION['booking_message_type'] === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?>">
            <?php 
            echo $_SESSION['booking_message'];
            unset($_SESSION['booking_message']);
            unset($_SESSION['booking_message_type']);
            ?>
        </div>
    <?php endif; ?>
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Book Your Ride</h2>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>#book" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-user text-yellow-600 mr-2"></i>Name
            </label>
            <input type="text" name="name" placeholder="Enter your name" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-900">
        </div>
        
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-phone text-yellow-600 mr-2"></i>Phone Number
            </label>
            <input type="tel" name="number" placeholder="Enter your phone number" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-900">
        </div>
        
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-map-marker-alt text-yellow-600 mr-2"></i>Pickup Location
            </label>
            <input type="text" name="pickup" placeholder="Enter pickup location" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-900">
        </div>
        
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-calendar text-yellow-600 mr-2"></i>Date
            </label>
            <input type="date" name="date" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-900">
        </div>
        
        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-3 px-6 rounded-lg transition transform hover:scale-105">
            <i class="fas fa-search mr-2"></i>Search Rides
        </button>
    </form>
</div>

