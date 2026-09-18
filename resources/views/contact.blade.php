@extends('layouts.app')

@section('title', 'Contact - Nice Barber')

@section('content')
    <!-- Hero Section -->
    <section class="py-12 px-4 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">Contact Us</h1>
            <p class="text-gray-600 text-lg">Get in touch with Nice Barber</p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold mb-8">Get in Touch</h2>
                    
                    <!-- Contact Info Card -->
                    <div class="space-y-8">
                        <!-- Phone -->
                        <div class="flex items-start gap-6">
                            <div class="text-3xl mt-1">📞</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Phone</h3>
                                <p class="text-gray-600 mb-3">Call us directly to book or get service information</p>
                                <a href="tel:{{ $businessInfo['phone'] }}" class="btn-call inline-block">
                                    <i class="fas fa-phone"></i> {{ $businessInfo['phone'] }}
                                </a>
                            </div>
                        </div>

                        <!-- Telegram -->
                        <div class="flex items-start gap-6">
                            <div class="text-3xl mt-1">💬</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Telegram</h3>
                                <p class="text-gray-600 mb-3">Send us a message on Telegram for quick replies</p>
                                <a href="https://t.me/nicebarber" target="_blank" class="btn-telegram inline-block">
                                    <i class="fab fa-telegram"></i> Message Us
                                </a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start gap-6">
                            <div class="text-3xl mt-1">📍</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Location</h3>
                                <p class="text-gray-700 font-semibold">{{ $businessInfo['name'] }}</p>
                                <p class="text-gray-600">{{ $businessInfo['location'] }}</p>
                                <p class="text-gray-500 text-sm">({{ $businessInfo['coordinates'] }})</p>
                            </div>
                        </div>

                        <!-- Operating Hours -->
                        <div class="flex items-start gap-6">
                            <div class="text-3xl mt-1">🕐</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Operating Hours</h3>
                                <p class="text-gray-600">Monday - Sunday</p>
                                <p class="text-gray-700 font-semibold">{{ $businessInfo['open_time'] }} - {{ $businessInfo['close_time'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Buttons -->
                    <div class="mt-12 border-t border-gray-200 pt-8">
                        <h3 class="text-xl font-bold mb-4">Quick Actions</h3>
                        <div class="flex flex-col gap-3">
                            <a href="tel:{{ $businessInfo['phone'] }}" class="btn-call w-full text-center">
                                <i class="fas fa-phone"></i> Call Us Now
                            </a>
                            <a href="https://t.me/nicebarber" target="_blank" class="btn-telegram w-full text-center">
                                <i class="fab fa-telegram"></i> Message on Telegram
                            </a>
                            <a href="{{ route('booking.form') }}" class="btn-primary w-full text-center">
                                <i class="fas fa-calendar"></i> Book Online
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map/Location Visual -->
                <div class="bg-gray-100 rounded-lg overflow-hidden border-2 border-gray-300 h-96 md:h-full flex flex-col items-center justify-center">
                    <div class="text-center">
                        <div class="text-7xl mb-4">📍</div>
                        <h3 class="text-2xl font-bold mb-2">Nice Barber Location</h3>
                        <p class="text-gray-600 mb-1">Bahir Dar</p>
                        <p class="text-gray-600 text-sm mb-4">In front of the Stadium</p>
                        <p class="text-gray-500 text-xs">(ስታዲየም ፊት ለፊት)</p>
                        
                        <!-- Coordinates -->
                        <div class="mt-6 bg-white rounded-lg p-4 inline-block">
                            <p class="text-gray-600 text-sm mb-1">GPS Coordinates</p>
                            <p class="font-mono text-sm font-bold">11.587644, 37.381240</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Details Section -->
    <section class="py-20 px-4 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">About Nice Barber</h2>
            <p class="section-subtitle">Professional grooming services in Bahir Dar</p>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-12">
                <!-- Detail 1 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        {{ $businessInfo['chairs'] }}
                    </div>
                    <h3 class="text-xl font-bold mb-2">Professional Chairs</h3>
                    <p class="text-gray-600">Modern facilities for comfortable service</p>
                </div>

                <!-- Detail 2 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        {{ $businessInfo['barbers'] }}
                    </div>
                    <h3 class="text-xl font-bold mb-2">Expert Barbers</h3>
                    <p class="text-gray-600">Experienced professionals dedicated to excellence</p>
                </div>

                <!-- Detail 3 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        ✓
                    </div>
                    <h3 class="text-xl font-bold mb-2">Queue System</h3>
                    <p class="text-gray-600">Smart booking to minimize wait times</p>
                </div>

                <!-- Detail 4 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        1
                    </div>
                    <h3 class="text-xl font-bold mb-2">Washing Basin</h3>
                    <p class="text-gray-600">Clean facilities for complete grooming</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services & Pricing Quick Reference -->
    <section class="py-20 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="section-title">Services & Pricing</h2>
            <p class="section-subtitle">All our services at a glance</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-4">✂️ Regular Haircut</h3>
                    <p class="text-gray-600 mb-3">Professional haircut with precision styling</p>
                    <p class="text-2xl font-bold text-black">ETB 300</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-4">👦 Kids Haircut</h3>
                    <p class="text-gray-600 mb-3">Specialized service for children</p>
                    <p class="text-2xl font-bold text-black">ETB 200</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-4">💇 Styling & Shape</h3>
                    <p class="text-gray-600 mb-3">Expert styling and shape-up</p>
                    <p class="text-2xl font-bold text-black">ETB 150</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-4">🎨 Hair Coloring</h3>
                    <p class="text-gray-600 mb-3">Professional coloring & treatment</p>
                    <p class="text-2xl font-bold text-black">ETB 500</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-4">👑 Full Package</h3>
                    <p class="text-gray-600 mb-3">Complete grooming experience</p>
                    <p class="text-2xl font-bold text-black">ETB 1,000</p>
                </div>

                <div class="bg-black text-white rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-4">📅 View All Services</h3>
                    <p class="text-gray-300 mb-4">Explore our complete range of grooming services</p>
                    <a href="{{ route('services') }}" class="text-white font-bold hover:underline">
                        Go to Services Page →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-4 bg-gray-50 border-y border-gray-200">
        <div class="max-w-3xl mx-auto">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find answers to common questions</p>
            
            <div class="space-y-6 mt-12">
                <!-- FAQ 1 -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-2">How do I book an appointment?</h3>
                    <p class="text-gray-600">You can book online through our website by filling out the booking form. You'll receive a queue number immediately. Alternatively, you can call us at {{ $businessInfo['phone'] }} or message us on Telegram.</p>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-2">What if I arrive without a booking?</h3>
                    <p class="text-gray-600">Walk-ins are welcome! You can get a queue number when you arrive at our shop. We'll process you based on current queue position.</p>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-2">How long does a typical haircut take?</h3>
                    <p class="text-gray-600">A regular haircut typically takes 20-30 minutes depending on the style and complexity. Full packages may take 45-60 minutes.</p>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-2">Do you accept walk-ins?</h3>
                    <p class="text-gray-600">Yes, we accept walk-ins! However, booking online or calling ahead ensures you don't have to wait long. Our queue system handles both bookings and walk-ins efficiently.</p>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-2">What payment methods do you accept?</h3>
                    <p class="text-gray-600">We accept cash (ETB). Contact us for other payment options available.</p>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-2">Can I choose a specific barber?</h3>
                    <p class="text-gray-600">Yes! Call us or message on Telegram to request a specific barber, and we'll accommodate your preference if available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-black text-white">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Visit Nice Barber?</h2>
            <p class="text-lg text-gray-300 mb-8">Book your appointment now or visit us in person. We're located in front of the Stadium in Bahir Dar.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:{{ $businessInfo['phone'] }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg inline-block text-center">
                    📞 Call Us: {{ $businessInfo['phone'] }}
                </a>
                <a href="{{ route('booking.form') }}" class="bg-white hover:bg-gray-200 text-black font-bold py-3 px-8 rounded-lg inline-block text-center">
                    📅 Book Online
                </a>
            </div>
        </div>
    </section>
@endsection
