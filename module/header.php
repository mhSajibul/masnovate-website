<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Masnovate Software - Innovative Software Solutions</title>
    <script>
         tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#dc2626',
                        secondary: '#1f2937',
                        accent: '#3b82f6'
                    },
                    backgroundImage: {
                        'hero-gradient': 'linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%)',
                        'text-gradient': 'linear-gradient(90deg, #e11d48 0%, #8b5cf6 100%)'
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                        'fade-in': 'fadeIn 1s ease-out forwards',
                        'scale-in': 'scaleIn 0.6s ease-out forwards',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'morph': 'morph 8s ease-in-out infinite',
                        'reveal': 'reveal 0.8s ease-out forwards',
                        'pulse-glow': 'pulse-glow 2s infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        morph: {
                            '0%, 100%': { borderRadius: '60% 40% 30% 70%/60% 30% 70% 40%' },
                            '50%': { borderRadius: '30% 60% 70% 40%/50% 60% 30% 60%' }
                        },
                        reveal: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        'pulse-glow': {
                            '0%': { boxShadow: '0 0 0 0 rgba(225, 29, 72, 0.5)' },
                            '70%': { boxShadow: '0 0 0 10px rgba(225, 29, 72, 0)' },
                            '100%': { boxShadow: '0 0 0 0 rgba(225, 29, 72, 0)' }
                        }
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(220, 38, 38, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(220, 38, 38, 0.6)' },
                        },
                        'slide-up': {
                            '0%': { opacity: '0', transform: 'translateY(50px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'fade-in': {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        'scale-in': {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                    }
                }

            }
            
        }
    </script>
    
</head>
<body class="bg-gray-50 text-gray-900">
     <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-primary"><img src="assets/images/masnovate.png" class="w-28 md:w-36 lg:w-48" alt="Masnovate"></a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="index.html" class="text-gray-700 hover:text-primary transition-colors">Home</a>
                    <a href="about.html" class="text-gray-700 hover:text-primary transition-colors">About</a>
                    <a href="services.html" class="text-gray-700 hover:text-primary transition-colors">Services</a>
                    <a href="portfolio.html" class="text-gray-700 hover:text-primary transition-colors">Portfolio</a>
                    <a href="contact.html" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
                </div>
                <button id="mobile-menu-button" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="index.html" class="block px-3 py-2 text-gray-700 hover:text-primary">Home</a>
                    <a href="about.html" class="block px-3 py-2 text-gray-700 hover:text-primary">About</a>
                    <a href="services.html" class="block px-3 py-2 text-gray-700 hover:text-primary">Services</a>
                    <a href="portfolio.html" class="block px-3 py-2 text-gray-700 hover:text-primary">Portfolio</a>
                    <a href="contact.html" class="block px-3 py-2 text-gray-700 hover:text-primary">Contact</a>
                </div>
            </div>
        </div>
    </nav>