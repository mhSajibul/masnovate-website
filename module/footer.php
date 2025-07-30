 <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl text-primary font-bold mb-4">Masnovate</h3>
                    <p class="text-gray-400 mb-4">
                        Portuguese innovation meets European excellence in web development and design.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-300">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Frontend Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Backend Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Graphics Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Brand Identity</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Portfolio</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Lisbon, Portugal</li>
                        <li>masnovate@gmail.com</li>
                        <li>+351 123 456 789</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Masnovate. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
        const navLinks = document.querySelectorAll('.nav-link');
        let menuOpen = false;
        
        // Get current page from URL
        const currentPath = window.location.pathname;
        const currentPage = getCurrentPageFromPath(currentPath);
        
        // Hamburger icon SVG
        const hamburgerIcon = `
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        `;
        
        // Close icon SVG
        const closeIcon = `
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        `;
        
        // Initialize menu button
        mobileMenuButton.innerHTML = hamburgerIcon;
        
        // Set initial active state based on current page
        setActiveMenu(currentPage);
        
        // Mobile menu toggle functionality
        mobileMenuButton.addEventListener('click', function() {
            toggleMobileMenu();
        });
        
        // Close mobile menu when clicking backdrop
        mobileMenuBackdrop.addEventListener('click', function() {
            if (menuOpen) {
                toggleMobileMenu();
            }
        });
        
        // Mobile menu link clicks - just close the menu, let default navigation happen
        const mobileLinks = document.querySelectorAll('.nav-mobile .nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (menuOpen) {
                    toggleMobileMenu();
                }
                // Don't prevent default - let the normal PHP navigation happen
            });
        });
        
        // Functions
        function getCurrentPageFromPath(path) {
            // Extract page name from PHP file path
            if (path.includes('index.html') || path === '/' || path === '') {
                return 'home';
            } else if (path.includes('about.html')) {
                return 'about';
            } else if (path.includes('services.html')) {
                return 'services';
            } else if (path.includes('pricing.html')) {
                return 'pricing';
            } else if (path.includes('portfolio.html')) {
                return 'portfolio';
            } else if (path.includes('contact.html')) {
                return 'contact';
            }
            return 'home'; // Default fallback
        }
        
        function toggleMobileMenu() {
            menuOpen = !menuOpen;
            
            if (menuOpen) {
                // Open menu
                mobileMenu.classList.remove('hidden');
                mobileMenuBackdrop.classList.add('active');
                // Force reflow to enable transition
                void mobileMenu.offsetHeight;
                mobileMenu.classList.add('menu-open');
                mobileMenuButton.innerHTML = closeIcon;
                document.body.style.overflow = 'hidden'; // Prevent scroll
            } else {
                // Close menu
                mobileMenu.classList.remove('menu-open');
                mobileMenuBackdrop.classList.remove('active');
                document.body.style.overflow = ''; // Restore scroll
                
                // Wait for transition to complete before hiding
                mobileMenu.addEventListener('transitionend', function handler() {
                    if (!menuOpen) { // Double check menu is still closed
                        mobileMenu.classList.add('hidden');
                    }
                    mobileMenu.removeEventListener('transitionend', handler);
                });
                mobileMenuButton.innerHTML = hamburgerIcon;
            }
            
            // Update aria attributes for accessibility
            mobileMenuButton.setAttribute('aria-expanded', menuOpen);
        }
        
        function setActiveMenu(activePage) {
            // Remove active class from all nav links
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            
            // Add active class to current page links (both desktop and mobile)
            navLinks.forEach(link => {
                if (link.getAttribute('data-page') === activePage) {
                    link.classList.add('active');
                }
            });
        }
        
        // Optional: Add click effect for desktop links (visual feedback before navigation)
        const desktopLinks = document.querySelectorAll('.nav-desktop .nav-link');
        desktopLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Add a temporary class for immediate visual feedback
                this.classList.add('active');
                // The page will navigate, so no need to remove it
            });
        });
    });
    </script>

    
</body>
</html>