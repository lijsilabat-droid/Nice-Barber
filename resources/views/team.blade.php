@extends('layouts.app')

@section('title', 'Our Team - Nice Barber')

@section('content')
    <!-- Hero Section -->
    <section class="py-12 px-4 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">Meet Our Team</h1>
            <p class="text-gray-600 text-lg">4 Professional Barbers Dedicated to Excellence</p>
        </div>
    </section>

    <!-- Team Members Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Professional Barbers</h2>
            <p class="section-subtitle">Experienced professionals with a passion for grooming</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($barbers as $barber)
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl hover:border-black transition transform hover:-translate-y-2">
                        <!-- Avatar -->
                        <div class="bg-gray-100 h-48 flex items-center justify-center text-7xl">
                            {{ $barber['image'] }}
                        </div>
                        
                        <!-- Info -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $barber['name'] }}</h3>
                            <p class="text-gray-600 font-semibold mb-2">{{ $barber['specialty'] }}</p>
                            <p class="text-sm text-gray-500 mb-4">
                                <i class="fas fa-briefcase"></i> {{ $barber['experience'] }}
                            </p>
                            <p class="text-gray-600 text-sm mb-6">Expert in creating quality cuts and styles tailored to each client's needs.</p>
                            
                            <a href="{{ route('booking.form') }}" class="btn-secondary w-full text-center block" style="padding: 10px 16px; font-size: 0.9rem;">
                                Book with {{ explode(' ', $barber['name'])[0] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Stats Section -->
    <section class="py-20 px-4 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Our Expertise</h2>
            <p class="section-subtitle">Years of combined experience in men's grooming</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-12">
                <!-- Stat 1 -->
                <div class="text-center">
                    <div class="text-6xl font-bold text-black mb-4">23+</div>
                    <h3 class="text-xl font-bold mb-2">Years Combined Experience</h3>
                    <p class="text-gray-600">Our team brings decades of professional expertise to every service</p>
                </div>
                
                <!-- Stat 2 -->
                <div class="text-center">
                    <div class="text-6xl font-bold text-black mb-4">1000+</div>
                    <h3 class="text-xl font-bold mb-2">Satisfied Customers</h3>
                    <p class="text-gray-600">Trusted by hundreds of customers for quality cuts and services</p>
                </div>
                
                <!-- Stat 3 -->
                <div class="text-center">
                    <div class="text-6xl font-bold text-black mb-4">6</div>
                    <h3 class="text-xl font-bold mb-2">Service Styles</h3>
                    <p class="text-gray-600">Masters of classic to modern barber techniques and styles</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialties Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Our Specialties</h2>
            <p class="section-subtitle">Each barber brings unique expertise to the team</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                <!-- Specialty 1 -->
                <div class="bg-white border border-gray-200 rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-cut text-black mr-3"></i> Fade Techniques
                    </h3>
                    <p class="text-gray-700 mb-4">Our specialists are experts in creating perfect fades - from high fades to low fades with smooth blending.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-600"></i> High Fade</li>
                        <li><i class="fas fa-check text-green-600"></i> Mid Fade</li>
                        <li><i class="fas fa-check text-green-600"></i> Low Fade</li>
                        <li><i class="fas fa-check text-green-600"></i> Skin Fade</li>
                    </ul>
                </div>

                <!-- Specialty 2 -->
                <div class="bg-white border border-gray-200 rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-palette text-black mr-3"></i> Hair Coloring
                    </h3>
                    <p class="text-gray-700 mb-4">Professional hair coloring services with premium products ensuring vibrant, long-lasting color.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-600"></i> Premium coloring</li>
                        <li><i class="fas fa-check text-green-600"></i> Color care</li>
                        <li><i class="fas fa-check text-green-600"></i> Hair treatment</li>
                        <li><i class="fas fa-check text-green-600"></i> Custom blending</li>
                    </ul>
                </div>

                <!-- Specialty 3 -->
                <div class="bg-white border border-gray-200 rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-beard text-black mr-3"></i> Beard Styling
                    </h3>
                    <p class="text-gray-700 mb-4">Expert beard trimming and styling to shape and groom your facial hair to perfection.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-600"></i> Precision trimming</li>
                        <li><i class="fas fa-check text-green-600"></i> Custom shaping</li>
                        <li><i class="fas fa-check text-green-600"></i> Beard care</li>
                        <li><i class="fas fa-check text-green-600"></i> Grooming advice</li>
                    </ul>
                </div>

                <!-- Specialty 4 -->
                <div class="bg-white border border-gray-200 rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-child text-black mr-3"></i> Kids Services
                    </h3>
                    <p class="text-gray-700 mb-4">Specialized in working with children, creating styles they love in a friendly, comfortable environment.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-600"></i> Kids haircuts</li>
                        <li><i class="fas fa-check text-green-600"></i> Friendly service</li>
                        <li><i class="fas fa-check text-green-600"></i> Age-appropriate styles</li>
                        <li><i class="fas fa-check text-green-600"></i> Patient approach</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 px-4 bg-black text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Our Core Values</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="text-center">
                    <div class="text-5xl mb-4">✂️</div>
                    <h3 class="text-xl font-bold mb-2">Excellence</h3>
                    <p class="text-gray-300">We strive for excellence in every haircut and service</p>
                </div>

                <!-- Value 2 -->
                <div class="text-center">
                    <div class="text-5xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold mb-2">Professionalism</h3>
                    <p class="text-gray-300">Professional service and respectful treatment always</p>
                </div>

                <!-- Value 3 -->
                <div class="text-center">
                    <div class="text-5xl mb-4">⏰</div>
                    <h3 class="text-xl font-bold mb-2">Reliability</h3>
                    <p class="text-gray-300">You can count on us for consistent quality service</p>
                </div>

                <!-- Value 4 -->
                <div class="text-center">
                    <div class="text-5xl mb-4">😊</div>
                    <h3 class="text-xl font-bold mb-2">Customer Care</h3>
                    <p class="text-gray-300">Your satisfaction is our top priority always</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Experience Our Professional Service</h2>
            <p class="text-gray-600 text-lg mb-8">Book an appointment with one of our expert barbers today and see the difference professional grooming makes.</p>
            
            <a href="{{ route('booking.form') }}" class="btn-primary">
                📅 Book Your Appointment
            </a>
        </div>
    </section>
@endsection
