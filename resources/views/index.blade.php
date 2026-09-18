@extends('layouts.app')

@section('title', 'Nice Barber - Professional Barber Shop in Bahir Dar')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Nice Barber</h1>
            <p>Experience premium grooming services from Bahir Dar's finest barbers. Professional expertise. Modern standards. Exceptional results.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('booking.form') }}" class="btn-primary">
                    <i class="fas fa-calendar"></i> Book an Appointment
                </a>
                <a href="{{ route('services') }}" class="btn-secondary">
                    <i class="fas fa-scissors"></i> Explore Services
                </a>
            </div>
        </div>
    </section>

    <!-- Quick Stats Section -->
    <section class="py-16 px-4 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <!-- Stat 1 -->
                <div>
                    <div class="text-4xl font-bold text-black mb-2">4</div>
                    <p class="text-gray-600 font-500">Professional Barbers</p>
                </div>
                
                <!-- Stat 2 -->
                <div>
                    <div class="text-4xl font-bold text-black mb-2">4</div>
                    <p class="text-gray-600 font-500">Premium Chairs</p>
                </div>
                
                <!-- Stat 3 -->
                <div>
                    <div class="text-4xl font-bold text-black mb-2">5+</div>
                    <p class="text-gray-600 font-500">Service Types</p>
                </div>
                
                <!-- Stat 4 -->
                <div>
                    <div class="text-4xl font-bold text-black mb-2">100%</div>
                    <p class="text-gray-600 font-500">Customer Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Our Popular Services</h2>
            <p class="section-subtitle">From basic haircuts to complete grooming packages</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="icon">✂️</div>
                    <h3>Regular Haircut</h3>
                    <p class="amharic">የታላቅ ፀጉር</p>
                    <p class="text-gray-600 text-sm mt-2">Professional haircut with precision styling</p>
                    <div class="price">300</div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card">
                    <div class="icon">💇</div>
                    <h3>Styling & Shape</h3>
                    <p class="amharic">ቅርፅ</p>
                    <p class="text-gray-600 text-sm mt-2">Expert styling and shape-up services</p>
                    <div class="price">150</div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card">
                    <div class="icon">👑</div>
                    <h3>Full Package</h3>
                    <p class="amharic">ሙሉ ፓኬጅ</p>
                    <p class="text-gray-600 text-sm mt-2">Complete grooming experience</p>
                    <div class="price">1,000</div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="btn-primary">
                    View All Services & Prices
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 px-4 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Why Choose Nice Barber?</h2>
            <p class="section-subtitle">Excellence in every detail</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <!-- Reason 1 -->
                <div class="text-center">
                    <div class="text-5xl mb-4">👨‍💼</div>
                    <h3 class="text-xl font-bold mb-3">Professional Team</h3>
                    <p class="text-gray-600">4 experienced barbers with years of expertise in men's grooming and styling</p>
                </div>
                
                <!-- Reason 2 -->
                <div class="text-center">
                    <div class="text-5xl mb-4">⏰</div>
                    <h3 class="text-xl font-bold mb-3">Queue System</h3>
                    <p class="text-gray-600">Smart booking system to minimize waiting time and manage appointments efficiently</p>
                </div>
                
                <!-- Reason 3 -->
                <div class="text-center">
                    <div class="text-5xl mb-4">✨</div>
                    <h3 class="text-xl font-bold mb-3">Premium Service</h3>
                    <p class="text-gray-600">Clean environment, modern facilities, and highest quality grooming standards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 px-4 bg-black text-white">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready for Your Best Look?</h2>
            <p class="text-lg text-gray-300 mb-8">Book your appointment now and experience professional grooming at its finest.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('booking.form') }}" class="bg-white text-black font-bold py-3 px-8 rounded-lg hover:bg-gray-200 transition inline-block text-center">
                    📅 Book an Appointment
                </a>
                <a href="tel:0918289788" class="border-2 border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white hover:text-black transition inline-block text-center">
                    📞 Call Us Now
                </a>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Find Us</h2>
            <p class="section-subtitle">Visit our shop in Bahir Dar</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Map or placeholder -->
                <div class="bg-gray-100 rounded-lg h-96 flex items-center justify-center border-2 border-gray-300">
                    <div class="text-center">
                        <div class="text-5xl mb-4">📍</div>
                        <p class="font-bold text-xl">Bahir Dar, in front of the Stadium</p>
                        <p class="text-gray-600 mt-2">(ስታዲየም ፊት ለፊት)</p>
                        <p class="text-gray-500 text-sm mt-4">Coordinates: 11.587644, 37.381240</p>
                    </div>
                </div>
                
                <!-- Location Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-6">Located in Bahir Dar</h3>
                    
                    <div class="mb-6">
                        <p class="text-gray-600 mb-4">Nice Barber is conveniently located in front of the Stadium in Bahir Dar, making it easily accessible for all customers in the area.</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-map-marker-alt text-2xl mt-1"></i>
                            <div>
                                <p class="font-bold">Address</p>
                                <p class="text-gray-600">In front of Stadium, Bahir Dar (ስታዲየም ፊት ለፊት)</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <i class="fas fa-clock text-2xl mt-1"></i>
                            <div>
                                <p class="font-bold">Operating Hours</p>
                                <p class="text-gray-600">Monday - Sunday</p>
                                <p class="text-gray-600">8:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <i class="fas fa-phone text-2xl mt-1"></i>
                            <div>
                                <p class="font-bold">Contact Us</p>
                                <p class="text-gray-600">
                                    <a href="tel:0918289788" class="text-black font-bold hover:underline">📞 0918289788</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex gap-4">
                        <a href="tel:0918289788" class="btn-call">
                            <i class="fas fa-phone"></i> Call Us
                        </a>
                        <a href="https://t.me/nicebarber" target="_blank" class="btn-telegram">
                            <i class="fab fa-telegram"></i> Message on Telegram
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
