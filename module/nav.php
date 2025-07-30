
    <nav class="bg-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="index.html">
                        <div class="w-28 md:w-36 lg:w-48 flex items-center justify-center">
                            <div class="w-28 md:w-36 lg:w-48 flex items-center justify-center">
                                <img src="assets/images/masnovate.png" class="w-28 md:w-36 lg:w-48" alt="Masnovate">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8 nav-desktop">
                    <a href="index.html" class="text-gray-700 hover:text-primary transition-colors nav-link" data-page="home">Home</a>
                    <a href="about.html" class="text-gray-700 hover:text-primary transition-colors nav-link" data-page="about">About</a>
                    <a href="services.html" class="text-gray-700 hover:text-primary transition-colors nav-link" data-page="services">Services</a>
                    <a href="pricing.html" class="text-gray-700 hover:text-primary transition-colors nav-link" data-page="pricing">Pricing</a>
                    <a href="portfolio.html" class="text-gray-700 hover:text-primary transition-colors nav-link" data-page="portfolio">Portfolio</a>
                    <a href="contact.html" class="text-gray-700 hover:text-primary transition-colors nav-link" data-page="contact">Contact</a>
                </div>
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 nav-mobile">
                    <a href="index.html" class="block px-3 py-2 text-gray-700 hover:text-primary nav-link" data-page="home">Home</a>
                    <a href="about.html" class="block px-3 py-2 text-gray-700 hover:text-primary nav-link" data-page="about">About</a>
                    <a href="services.html" class="block px-3 py-2 text-gray-700 hover:text-primary nav-link" data-page="services">Services</a>
                    <a href="pricing.html" class="block px-3 py-2 text-gray-700 hover:text-primary nav-link" data-page="pricing">Pricing</a>
                    <a href="portfolio.html" class="block px-3 py-2 text-gray-700 hover:text-primary nav-link" data-page="portfolio">Portfolio</a>
                    <a href="contact.html" class="block px-3 py-2 text-gray-700 hover:text-primary nav-link" data-page="contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- After your nav element -->
    <div id="mobile-menu-backdrop" class="mobile-menu-backdrop"></div>

   