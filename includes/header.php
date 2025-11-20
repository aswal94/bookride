<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - BookRide' : 'BookRide - Your Trusted Taxi Service'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        input[type="date"] {
            color: #374151;
            position: relative;
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: 1;
            position: absolute;
            right: 12px;
            width: 20px;
            height: 20px;
            z-index: 1;
        }
        input[type="date"]::-webkit-datetime-edit {
            color: #374151;
        }
        input[type="date"]::-webkit-datetime-edit-fields-wrapper {
            color: #374151;
        }
        input[type="date"]::-webkit-datetime-edit-text {
            color: #374151;
        }
        input[type="date"]::-webkit-datetime-edit-month-field {
            color: #374151;
        }
        input[type="date"]::-webkit-datetime-edit-day-field {
            color: #374151;
        }
        input[type="date"]::-webkit-datetime-edit-year-field {
            color: #374151;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-blue-600">
                        <i class="fas fa-taxi mr-2"></i>BookRide
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <?php 
                        $currentPage = basename($_SERVER['PHP_SELF'], '.php');
                        if ($currentPage == 'index') $currentPage = '';
                        ?>
                        <a href="/" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition <?php echo ($currentPage == '' || $currentPage == 'index') ? 'text-blue-600 border-b-2 border-blue-600' : ''; ?>">Home</a>
                        <a href="/about" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition <?php echo $currentPage == 'about' ? 'text-blue-600 border-b-2 border-blue-600' : ''; ?>">About</a>
                        <a href="/service" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition <?php echo $currentPage == 'service' ? 'text-blue-600 border-b-2 border-blue-600' : ''; ?>">Services</a>
                        <a href="/contact" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition <?php echo $currentPage == 'contact' ? 'text-blue-600 border-b-2 border-blue-600' : ''; ?>">Contact</a>
                        <a href="/#book" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md text-sm font-medium transition">Book Now</a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button bg-gray-100 inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="hidden mobile-menu md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-50">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600">About</a>
                <a href="/service" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600">Services</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600">Contact</a>
                <a href="/#book" class="block px-3 py-2 rounded-md text-base font-medium bg-blue-600 text-white">Book Now</a>
            </div>
        </div>
    </nav>
    
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>

