@extends('layouts.app')

@section('title', 'Book an Appointment - Nice Barber')

@section('content')
    <!-- Hero Section -->
    <section class="py-12 px-4 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">Book Your Appointment</h1>
            <p class="text-gray-600 text-lg">Get your queue number and schedule your visit</p>
        </div>
    </section>

    <!-- Booking Form Section -->
    <section class="py-20 px-4">
        <div class="max-w-3xl mx-auto">
            <!-- Form Container -->
            <div id="booking-form-container" class="bg-white border border-gray-200 rounded-lg p-8 md:p-12">
                <h2 class="text-2xl font-bold mb-8">Booking Information</h2>
                
                <form id="booking-form" method="POST" action="{{ route('booking.store') }}">
                    @csrf
                    
                    <!-- Name Input -->
                    <div class="mb-6">
                        <label for="customer_name" class="block text-sm font-semibold mb-2">Your Full Name *</label>
                        <input 
                            type="text" 
                            id="customer_name" 
                            name="customer_name" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-black focus:ring-1 focus:ring-black"
                            placeholder="e.g., Abebe Tadesse"
                            required
                        >
                        <span class="text-red-500 text-sm" id="customer_name_error"></span>
                    </div>

                    <!-- Phone Input -->
                    <div class="mb-6">
                        <label for="phone_number" class="block text-sm font-semibold mb-2">Phone Number *</label>
                        <input 
                            type="tel" 
                            id="phone_number" 
                            name="phone_number" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-black focus:ring-1 focus:ring-black"
                            placeholder="e.g., 0918289788"
                            required
                        >
                        <span class="text-red-500 text-sm" id="phone_number_error"></span>
                    </div>

                    <!-- Service Selection -->
                    <div class="mb-8">
                        <label for="service" class="block text-sm font-semibold mb-2">Select Service *</label>
                        <select 
                            id="service" 
                            name="service" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-black focus:ring-1 focus:ring-black"
                            required
                        >
                            <option value="">-- Choose a Service --</option>
                            @foreach($services as $serviceName => $price)
                                <option value="{{ $serviceName }}">
                                    {{ $serviceName }} - ETB {{ $price }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-red-500 text-sm" id="service_error"></span>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full btn-primary"
                        id="submit-btn"
                    >
                        <i class="fas fa-check"></i> Get Queue Number
                    </button>
                </form>
            </div>

            <!-- Success Message Section (Hidden by default) -->
            <div id="success-container" class="hidden mt-8">
                <!-- Success Card -->
                <div class="bg-green-50 border-2 border-green-500 rounded-lg p-8 md:p-12">
                    <div class="text-center">
                        <div class="text-6xl mb-4">✅</div>
                        <h3 class="text-2xl font-bold mb-4">Booking Confirmed!</h3>
                        
                        <!-- Queue Number Display -->
                        <div class="bg-white border-3 border-green-500 rounded-lg p-8 mb-6">
                            <p class="text-gray-600 text-sm mb-2">Your Queue Number</p>
                            <div class="text-5xl font-bold text-green-600" id="queue-number-display">#Q-12345</div>
                        </div>

                        <!-- Booking Details -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6 text-left">
                            <h4 class="font-bold text-lg mb-4">Booking Details</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-gray-600 text-sm">Customer Name</p>
                                    <p class="font-semibold text-lg" id="booking-name">Abebe Tadesse</p>
                                </div>
                                <div>
                                    <p class="text-gray-600 text-sm">Phone Number</p>
                                    <p class="font-semibold text-lg" id="booking-phone">0918289788</p>
                                </div>
                                <div>
                                    <p class="text-gray-600 text-sm">Service</p>
                                    <p class="font-semibold text-lg" id="booking-service">Regular Haircut</p>
                                </div>
                                <div>
                                    <p class="text-gray-600 text-sm">Price</p>
                                    <p class="font-semibold text-lg">ETB <span id="booking-price">300</span></p>
                                </div>
                                <div>
                                    <p class="text-gray-600 text-sm">Your Position</p>
                                    <p class="font-semibold text-lg">#<span id="booking-position">1</span> in Queue</p>
                                </div>
                                <div>
                                    <p class="text-gray-600 text-sm">Booking Time</p>
                                    <p class="font-semibold text-lg" id="booking-time">Now</p>
                                </div>
                            </div>
                        </div>

                        <!-- Instructions -->
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6 text-left">
                            <h4 class="font-bold text-blue-900 mb-2">📝 Important Instructions</h4>
                            <ul class="text-blue-800 text-sm space-y-2">
                                <li>✓ Save your queue number</li>
                                <li>✓ Arrive at Nice Barber as soon as possible</li>
                                <li>✓ Show your queue number to the staff</li>
                                <li>✓ Wait for your turn (you can check status by calling us)</li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="border-t-2 border-gray-200 pt-6">
                            <p class="text-gray-700 mb-4">Need to reach us?</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="tel:0918289788" class="btn-call">
                                    <i class="fas fa-phone"></i> Call Us: 0918289788
                                </a>
                                <a href="https://t.me/nicebarber" target="_blank" class="btn-telegram">
                                    <i class="fab fa-telegram"></i> Message on Telegram
                                </a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="mt-6 text-center text-gray-600">
                            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Location:</p>
                            <p class="font-semibold">Nice Barber</p>
                            <p>In front of Stadium, Bahir Dar</p>
                            <p class="text-sm text-gray-500">(ስታዲየም ፊት ለፊት)</p>
                        </div>
                    </div>
                </div>

                <!-- New Booking Button -->
                <div class="text-center mt-8">
                    <button 
                        id="new-booking-btn" 
                        class="btn-secondary"
                        onclick="location.reload()"
                    >
                        <i class="fas fa-plus"></i> Make Another Booking
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Info Section -->
    <section class="py-20 px-4 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">How Our Booking System Works</h2>
            <p class="section-subtitle">Simple and efficient queue management</p>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-12">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                    <h3 class="font-bold text-lg mb-2">Fill Form</h3>
                    <p class="text-gray-600 text-sm">Enter your name, phone, and choose your service</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                    <h3 class="font-bold text-lg mb-2">Get Queue Number</h3>
                    <p class="text-gray-600 text-sm">Receive your unique queue number instantly</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                    <h3 class="font-bold text-lg mb-2">Visit Shop</h3>
                    <p class="text-gray-600 text-sm">Come to our shop and present your queue number</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="bg-black text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                    <h3 class="font-bold text-lg mb-2">Get Service</h3>
                    <p class="text-gray-600 text-sm">Enjoy professional grooming at Nice Barber!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title">Services & Pricing</h2>
            <p class="section-subtitle">Choose the perfect service for your needs</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mt-12">
                @foreach($services as $serviceName => $price)
                    <div class="bg-white border border-gray-200 rounded-lg p-6 text-center hover:shadow-lg hover:border-black transition">
                        <p class="text-3xl mb-3">💈</p>
                        <h3 class="font-bold text-lg mb-2">{{ $serviceName }}</h3>
                        <p class="text-2xl font-bold text-black">ETB {{ $price }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('extra-js')
<script>
document.getElementById('booking-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    // Clear previous errors
    document.getElementById('customer_name_error').textContent = '';
    document.getElementById('phone_number_error').textContent = '';
    document.getElementById('service_error').textContent = '';
    
    // Disable submit button
    const submitBtn = document.getElementById('submit-btn');
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
    
    const formData = {
        customer_name: document.getElementById('customer_name').value,
        phone_number: document.getElementById('phone_number').value,
        service: document.getElementById('service').value,
        _token: document.querySelector('input[name="_token"]').value
    };
    
    try {
        const response = await fetch('{{ route("booking.store") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': formData._token
            },
            body: JSON.stringify({
                customer_name: formData.customer_name,
                phone_number: formData.phone_number,
                service: formData.service
            })
        });
        
        const data = await response.json();
        
        if (data.success) {
            // Hide form and show success
            document.getElementById('booking-form-container').classList.add('hidden');
            document.getElementById('success-container').classList.remove('hidden');
            
            // Populate success details
            document.getElementById('queue-number-display').textContent = '#' + data.queue_number.split('-').pop();
            document.getElementById('booking-name').textContent = data.customer_name;
            document.getElementById('booking-phone').textContent = formData.phone_number;
            document.getElementById('booking-service').textContent = data.service;
            document.getElementById('booking-price').textContent = data.price;
            document.getElementById('booking-position').textContent = data.position;
            document.getElementById('booking-time').textContent = new Date().toLocaleString('en-US', {
                hour: '2-digit',
                minute: '2-digit',
                hour12: true
            });
            
            // Scroll to success message
            setTimeout(() => {
                document.getElementById('success-container').scrollIntoView({ behavior: 'smooth' });
            }, 500);
        } else {
            alert('Error: ' + data.message);
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-check"></i> Get Queue Number';
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fas fa-check"></i> Get Queue Number';
    }
});
</script>
@endsection
