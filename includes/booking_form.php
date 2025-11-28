<!-- Booking Form -->
<div id="book" class="bg-white rounded-lg shadow-2xl p-6 md:p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Book Your Ride</h2>
    <form action="#" method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-user text-blue-600 mr-2"></i>Name
            </label>
            <input type="text" name="name" placeholder="Enter your name" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900">
        </div>
        
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-phone text-blue-600 mr-2"></i>Phone Number
            </label>
            <input type="tel" name="number" placeholder="Enter your phone number" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900">
        </div>
        
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i>Pickup Location
            </label>
            <input type="text" name="pickup" placeholder="Enter pickup location" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900">
        </div>
        
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-2">
                <i class="fas fa-calendar text-blue-600 mr-2"></i>Date
            </label>
            <input type="date" name="date" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-900">
        </div>
        
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition transform hover:scale-105">
            <i class="fas fa-search mr-2"></i>Search Rides
        </button>
    </form>
</div>

