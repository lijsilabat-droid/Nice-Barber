<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-width,initial-scale-1.0">
        <title>Nice Barber</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&family=Crimson+Text:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        .crimson {
            font-family: 'Crimson Text', serif;
        }
        
        body {
            background-color: #ffffff;
            color: #1a1a1a;
        }
        
        /* Smooth transitions */
        a, button {
            transition: all 0.3s ease;
        }
        
        /* Navbar styling */
        nav {
            background-color: #ffffff;
            border-bottom: 1px solid #e5e5e5;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        
        nav a {
            position: relative;
            color: #1a1a1a;
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #1a1a1a;
            transition: width 0.3s ease;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        nav a.active {
            color: #1a1a1a;
            font-weight: 600;
        }
        
        nav a.active::after {
            width: 100%;
        }
        
        /* Button styles */
        .btn-primary {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 12px 32px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.95rem;
            border: 2px solid #1a1a1a;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }
        
        .btn-primary:hover {
            background-color: #ffffff;
            color: #1a1a1a;
        }
        
        .btn-secondary {
            background-color: transparent;
            color: #1a1a1a;
            padding: 12px 32px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.95rem;
            border: 2px solid #1a1a1a;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }
        
        .btn-secondary:hover {
            background-color: #1a1a1a;
            color: #ffffff;
        }
        
        .btn-call {
            background-color: #10b981;
            color: white;
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-call:hover {
            background-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        
        .btn-telegram {
            background-color: #0088cc;
            color: white;
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-telegram:hover {
            background-color: #006fa0;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 136, 204, 0.3);
        }
        
        /* Hero section */
        .hero {
            background: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%);
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #e5e5e5;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(26, 26, 26, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(26, 26, 26, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            max-width: 800px;
            padding: 40px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: -2px;
        }
        
        .hero p {
            font-size: 1.25rem;
            color: #666;
            margin-bottom: 40px;
            font-weight: 300;
            line-height: 1.6;
        }
        
        /* Section titles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
            text-align: center;
            margin-bottom: 60px;
            font-weight: 400;
        }
        
        /* Card styles */
        .service-card {
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            border-color: #1a1a1a;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
        
        .service-card .icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .service-card .amharic {
            font-size: 0.9rem;
            color: #999;
            margin-bottom: 15px;
        }
        
        .service-card .price {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-top: 20px;
        }
        
        .service-card .price::before {
            content: 'ETB ';
            font-size: 1rem;
            color: #999;
        }
        
        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 60px 20px 20px;
            border-top: 1px solid #333;
        }
        
        footer a {
            color: #ccc;
            text-decoration: none;
        }
        
        footer a:hover {
            color: #ffffff;
        }
        
        .footer-section h4 {
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .footer-section ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-section ul li {
            margin-bottom: 12px;
        }
        
        .footer-section ul li a {
            color: #bbb;
        }
        
        .footer-section ul li a:hover {
            color: #ffffff;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            nav a {
                font-size: 0.85rem;
            }
        }
        
        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
    
    @yield('extra-css')
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-50 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="text-2xl font-bold text-black no-underline">
                    <i class="fas fa-cut"></i> Nice Barber
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="@if(Route::currentRouteName() === 'home') active @endif">Home</a>
                    <a href="{{ route('services') }}" class="@if(Route::currentRouteName() === 'services') active @endif">Services</a>
                    <a href="{{ route('team') }}" class="@if(Route::currentRouteName() === 'team') active @endif">Team</a>
                    <a href="{{ route('contact') }}" class="@if(Route::currentRouteName() === 'contact') active @endif">Contact</a>
                </div>
                
                <!-- CTA Buttons -->
                <div class="hidden md:flex items-center gap-4">
                    <a href="tel:0918289788" class="btn-call">
                        <i class="fas fa-phone"></i> Call Us
                    </a>
                    <a href="{{ route('booking.form') }}" class="btn-primary">Book Now</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="menu-btn" class="text-black focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-200">
                <a href="{{ route('home') }}" class="block py-2 text-black hover:text-gray-600">Home</a>
                <a href="{{ route('services') }}" class="block py-2 text-black hover:text-gray-600">Services</a>
                <a href="{{ route('team') }}" class="block py-2 text-black hover:text-gray-600">Team</a>
                <a href="{{ route('contact') }}" class="block py-2 text-black hover:text-gray-600">Contact</a>
                <a href="{{ route('booking.form') }}" class="block py-2 text-black font-bold">📅 Book Appointment</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- About -->
                <div class="footer-section">
                    <h4><i class="fas fa-cut"></i> Nice Barber</h4>
                    <p class="text-sm text-gray-400">Professional barber shop in Bahir Dar with 4 experienced barbers dedicated to providing quality services.</p>
                </div>
                
                <!-- Quick Links -->
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('team') }}">Our Team</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="{{ route('services') }}">Haircuts</a></li>
                        <li><a href="{{ route('services') }}">Styling</a></li>
                        <li><a href="{{ route('services') }}">Coloring</a></li>
                        <li><a href="{{ route('services') }}">Full Packages</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="tel:0918289788"><i class="fas fa-phone"></i> 0918289788</a></li>
                        <li><a href="https://t.me/nicebarber"><i class="fab fa-telegram"></i> Telegram</a></li>
                        <li><a href="{{ route('booking.form') }}"><i class="fas fa-calendar"></i> Book Now</a></li>
                        <li class="text-sm text-gray-500 mt-4">📍 Bahir Dar, in front of Stadium</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 text-center text-gray-500 text-sm">
                <p>&copy; {{ date('Y') }} Nice Barber. All rights reserved. | Made with ❤️ for Bahir Dar</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    @yield('extra-js')
</body>
</html>
