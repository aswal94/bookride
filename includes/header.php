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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NVPHKNV4');</script>
    <!-- End Google Tag Manager -->

</head>
<body class="bg-gray-50">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVPHKNV4"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <!-- Navigation -->
    <nav class="bg-gray-900 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-yellow-600">
                        <!-- <i class="fas fa-taxi mr-2"></i> -->
                        <img src="/images/logo.png" alt="BookRide Logo" width="150px" />
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <?php 
                        // Get current page from REQUEST_URI
                        $requestUri = $_SERVER['REQUEST_URI'];
                        $requestPath = parse_url($requestUri, PHP_URL_PATH);
                        $requestPath = trim($requestPath, '/');
                        $currentPage = '';
                        if (!empty($requestPath)) {
                            $pathParts = explode('/', $requestPath);
                            $currentPage = $pathParts[0]; // Get first part of path
                        }
                        ?>
                        <a href="/" class="text-white hover:text-yellow-400 px-3 py-2 text-sm font-medium transition <?php echo ($currentPage == '' || $currentPage == 'index') ? 'text-yellow-400 border-b-2 border-yellow-400' : ''; ?>">Home</a>
                        <a href="/about" class="text-white hover:text-yellow-400 px-3 py-2 text-sm font-medium transition <?php echo $currentPage == 'about' ? 'text-yellow-400 border-b-2 border-yellow-400' : ''; ?>">About</a>
                        <a href="/service" class="text-white hover:text-yellow-400 px-3 py-2 text-sm font-medium transition <?php echo $currentPage == 'service' ? 'text-yellow-400 border-b-2 border-yellow-400' : ''; ?>">Services</a>
                        <a href="/contact" class="text-white hover:text-yellow-400 px-3 py-2 text-sm font-medium transition <?php echo $currentPage == 'contact' ? 'text-yellow-400 border-b-2 border-yellow-400' : ''; ?>">Contact</a>
                        <a href="/#book" class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-2 rounded-md text-sm font-medium transition font-bold">Book Now</a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-yellow-400 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="hidden mobile-menu md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-900">
                <?php 
                // Get current page from REQUEST_URI
                $requestUri = $_SERVER['REQUEST_URI'];
                $requestPath = parse_url($requestUri, PHP_URL_PATH);
                $requestPath = trim($requestPath, '/');
                $currentPage = '';
                if (!empty($requestPath)) {
                    $pathParts = explode('/', $requestPath);
                    $currentPage = $pathParts[0]; // Get first part of path
                }
                ?>
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($currentPage == '' || $currentPage == 'index') ? 'text-yellow-400 bg-gray-800' : 'text-white hover:bg-gray-800 hover:text-yellow-400'; ?>">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium <?php echo $currentPage == 'about' ? 'text-yellow-400 bg-gray-800' : 'text-white hover:bg-gray-800 hover:text-yellow-400'; ?>">About</a>
                <a href="/service" class="block px-3 py-2 rounded-md text-base font-medium <?php echo $currentPage == 'service' ? 'text-yellow-400 bg-gray-800' : 'text-white hover:bg-gray-800 hover:text-yellow-400'; ?>">Services</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium <?php echo $currentPage == 'contact' ? 'text-yellow-400 bg-gray-800' : 'text-white hover:bg-gray-800 hover:text-yellow-400'; ?>">Contact</a>
                <a href="/#book" class="block px-3 py-2 rounded-md text-base font-medium bg-yellow-500 text-black font-bold">Book Now</a>
            </div>
        </div>
    </nav>
    
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>

