@extends('layouts.app')

@section('title', 'Services - Nice Barber')

@section('content')
    <!-- Hero Section -->
    <section class="py-12 px-4 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">Our Services</h1>
            <p class="text-gray-600 text-lg">Professional grooming services at affordable prices</p>
        </div>
    </section>

    <!-- Main Services Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Premium Services</h2>
            <p class="section-subtitle">Choose the service that fits your needs</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                @foreach($services as $service)
                    <div class="service-card">
                        <div class="icon text-5xl mb-4">{{ $service['icon'] }}</div>
                        <h3>{{ $service['name'] }}</h3>
                        <p class="amharic text-sm mb-3">{{ $service['amharic'] }}</p>
                        <p class="text-gray-600 text-xs mb-6">Professional service by experienced barbers</p>
                        <div class="price">
                            @if($service['price'] >= 1000)
                                {{ number_format($service['price']) }}
                            @else
                                {{ $service['price'] }}
                            @endif
                        </div>
                        <a href="{{ route('booking.form') }}" class="btn-secondary mt-6 w-full text-center block" style="padding: 10px 16px; font-size: 0.9rem;">
                            Book Now
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Styles & Techniques Section -->
    <section class="py-20 px-4 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Our Signature Styles</h2>
            <p class="section-subtitle">Professional cutting and styling techniques</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($styles as $style => $amharic)
                    <div class="bg-white border border-gray-200 rounded-lg p-8 text-center hover:shadow-lg hover:border-black transition">
                        <h3 class="text-xl font-bold mb-2">{{ $style }}</h3>
                        <p class="text-gray-600 amharic mb-4">{{ $amharic }}</p>
                        <p class="text-sm text-gray-500">Professional execution</p>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-12 bg-white border-2 border-black rounded-lg p-8">
                <h3 class="text-2xl font-bold mb-4">Want to Try a New Style?</h3>
                <p class="text-gray-600 mb-6">Our experienced barbers can recommend the perfect style for your hair type and face shape. Let's create your signature look!</p>
                <a href="{{ route('booking.form') }}" class="btn-primary">
                    <i class="fas fa-calendar"></i> Book a Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Service Details</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12">
                <!-- Service Detail 1 -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="text-4xl mb-4">✂️</div>
                    <h3 class="text-2xl font-bold mb-4">Regular Haircut</h3>
                    <p class="amharic text-lg text-gray-600 mb-4">የታላቅ ፀጉር</p>
                    <p class="text-gray-700 mb-4">Perfect for maintaining your regular look. Our barbers will trim, shape, and style your hair to perfection with precision cutting techniques.</p>
                    <ul class="space-y-2 text-gray-700">
                        <li><i class="fas fa-check text-green-600"></i> Precision cutting</li>
                        <li><i class="fas fa-check text-green-600"></i> Professional styling</li>
                        <li><i class="fas fa-check text-green-600"></i> Clean finish</li>
                    </ul>
                    <p class="text-2xl font-bold mt-6"><span class="text-gray-600">ETB</span> 300</p>
                </div>

                <!-- Service Detail 2 -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="text-4xl mb-4">👦</div>
                    <h3 class="text-2xl font-bold mb-4">Kids Haircut</h3>
                    <p class="amharic text-lg text-gray-600 mb-4">የህፃን ፀጉር</p>
                    <p class="text-gray-700 mb-4">Specialized service for children with patience and care. Our barbers are experienced in handling young customers and creating styles they'll love.</p>
                    <ul class="space-y-2 text-gray-700">
                        <li><i class="fas fa-check text-green-600"></i> Child-friendly approach</li>
                        <li><i class="fas fa-check text-green-600"></i> Age-appropriate styles</li>
                        <li><i class="fas fa-check text-green-600"></i> Quick and easy</li>
                    </ul>
                    <p class="text-2xl font-bold mt-6"><span class="text-gray-600">ETB</span> 200</p>
                </div>

                <!-- Service Detail 3 -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="text-4xl mb-4">💇</div>
                    <h3 class="text-2xl font-bold mb-4">Styling & Shape</h3>
                    <p class="amharic text-lg text-gray-600 mb-4">ቅርፅ</p>
                    <p class="text-gray-700 mb-4">Expert styling and shape-up service to enhance your appearance. Perfect for special occasions or a fresh new look.</p>
                    <ul class="space-y-2 text-gray-700">
                        <li><i class="fas fa-check text-green-600"></i> Custom styling</li>
                        <li><i class="fas fa-check text-green-600"></i> Shape and definition</li>
                        <li><i class="fas fa-check text-green-600"></i> Professional finish</li>
                    </ul>
                    <p class="text-2xl font-bold mt-6"><span class="text-gray-600">ETB</span> 150</p>
                </div>

                <!-- Service Detail 4 -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-2xl font-bold mb-4">Hair Coloring & Treatment</h3>
                    <p class="amharic text-lg text-gray-600 mb-4">ቀለም እና ሙሉ ፀጉር</p>
                    <p class="text-gray-700 mb-4">Premium hair coloring with full treatment service. Professional techniques to ensure vibrant color and healthy hair.</p>
                    <ul class="space-y-2 text-gray-700">
                        <li><i class="fas fa-check text-green-600"></i> Professional coloring</li>
                        <li><i class="fas fa-check text-green-600"></i> Full treatment</li>
                        <li><i class="fas fa-check text-green-600"></i> Color care included</li>
                    </ul>
                    <p class="text-2xl font-bold mt-6"><span class="text-gray-600">ETB</span> 500</p>
                </div>

                <!-- Service Detail 5 -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="text-4xl mb-4">👑</div>
                    <h3 class="text-2xl font-bold mb-4">Full Package</h3>
                    <p class="amharic text-lg text-gray-600 mb-4">ሙሉ ፓኬጅ</p>
                    <p class="text-gray-700 mb-4">Our premium service package includes everything for a complete grooming transformation. The ultimate barber experience.</p>
                    <ul class="space-y-2 text-gray-700">
                        <li><i class="fas fa-check text-green-600"></i> Professional haircut</li>
                        <li><i class="fas fa-check text-green-600"></i> Beard styling</li>
                        <li><i class="fas fa-check text-green-600"></i> Hair treatment</li>
                        <li><i class="fas fa-check text-green-600"></i> Complete grooming</li>
                    </ul>
                    <p class="text-2xl font-bold mt-6"><span class="text-gray-600">ETB</span> 1,000</p>
                </div>

                <!-- Service Detail 6 -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <div class="text-4xl mb-4">🧔</div>
                    <h3 class="text-2xl font-bold mb-4">Beard Styling</h3>
                    <p class="amharic text-lg text-gray-600 mb-4">ፂም ቅርፅ</p>
                    <p class="text-gray-700 mb-4">Specialized beard trimming and styling. Our experts will shape and groom your beard to perfection with expert techniques.</p>
                    <ul class="space-y-2 text-gray-700">
                        <li><i class="fas fa-check text-green-600"></i> Precision beard trim</li>
                        <li><i class="fas fa-check text-green-600"></i> Custom shaping</li>
                        <li><i class="fas fa-check text-green-600"></i> Professional grooming</li>
                    </ul>
                    <p class="text-2xl font-bold mt-6"><span class="text-gray-600">ETB</span> 200 - 400</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="py-20 px-4 bg-gray-50 border-y border-gray-200">
        <div class="max-w-4xl mx-auto">
            <h2 class="section-title">Quick Price Reference</h2>
            
            <div class="overflow-x-auto mt-12">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-black text-white">
                            <th class="p-4 text-left">Service</th>
                            <th class="p-4 text-left">Amharic</th>
                            <th class="p-4 text-right">Price (ETB)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="p-4 font-medium">{{ $service['name'] }}</td>
                                <td class="p-4 text-gray-600">{{ $service['amharic'] }}</td>
                                <td class="p-4 text-right font-bold">
                                    @if($service['price'] >= 1000)
                                        {{ number_format($service['price']) }}
                                    @else
                                        {{ $service['price'] }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Look Your Best?</h2>
            <p class="text-gray-600 text-lg mb-8">Book your appointment now and experience professional grooming services at Nice Barber.</p>
            
            <a href="{{ route('booking.form') }}" class="btn-primary">
                📅 Book Your Appointment
            </a>
        </div>
    </section>
@endsection
