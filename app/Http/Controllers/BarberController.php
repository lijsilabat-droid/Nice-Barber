<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarberController extends Controller
{
    /**
     * Display the home page with overview
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display services page
     */
    public function services()
    {
        $services = [
            [
                'name' => 'Regular Haircut',
                'amharic' => 'የታላቅ ፀጉር',
                'price' => 300,
                'icon' => '✂️'
            ],
            [
                'name' => 'Kids Haircut',
                'amharic' => 'የህፃን ፀጉር',
                'price' => 200,
                'icon' => '👦'
            ],
            [
                'name' => 'Styling / Shape',
                'amharic' => 'ቅርፅ',
                'price' => 150,
                'icon' => '💇'
            ],
            [
                'name' => 'Hair Coloring & Full Treatment',
                'amharic' => 'ቀለም እና ሙሉ ፀጉር',
                'price' => 500,
                'icon' => '🎨'
            ],
            [
                'name' => 'Full Package',
                'amharic' => 'ሙሉ ፓኬጅ',
                'price' => 1000,
                'icon' => '👑'
            ],
        ];

        $styles = [
            'Fade Up' => 'ፊድ አፕ',
            'Mid Fade' => 'ሚድ ፊድ',
            'Fro/Friz' => 'ፍሬዝ',
            'Dreadlocks' => 'ድሬድ',
            'Clean Cut' => 'ክሊን ከት',
            'Beard Styling' => 'ፂም ቅርፅ',
        ];

        return view('services', compact('services', 'styles'));
    }

    /**
     * Display team page
     */
    public function team()
    {
        $barbers = [
            [
                'name' => 'Dawit Teklemariam',
                'specialty' => 'Senior Barber - Fade Specialist',
                'experience' => '8+ years',
                'image' => '💈'
            ],
            [
                'name' => 'Getnet Assefa',
                'specialty' => 'Professional Stylist - Coloring Expert',
                'experience' => '6+ years',
                'image' => '💇'
            ],
            [
                'name' => 'Tekle Alemayehu',
                'specialty' => 'Beard & Grooming Specialist',
                'experience' => '5+ years',
                'image' => '🧔'
            ],
            [
                'name' => 'Addis Mekonnen',
                'specialty' => 'Kids & Family Haircuts',
                'experience' => '4+ years',
                'image' => '👨'
            ],
        ];

        return view('team', compact('barbers'));
    }

    /**
     * Display booking form
     */
    public function showBookingForm()
    {
        $services = [
            'Regular Haircut' => 300,
            'Kids Haircut' => 200,
            'Styling / Shape' => 150,
            'Hair Coloring & Full Treatment' => 500,
            'Full Package' => 1000,
        ];

        return view('booking', compact('services'));
    }

    /**
     * Generate a unique queue number
     * Format: #Q-YYYYMMDD-XXXX (where XXXX is sequential)
     */
    private function generateQueueNumber()
    {
        $today = date('Ymd');
        $prefix = 'Q-' . $today . '-';

        // Get the count of bookings created today
        $todayCount = Booking::whereDate('created_at', today())
            ->count() + 1;

        // Format with leading zeros (e.g., 0001)
        $queueNumber = $prefix . str_pad($todayCount, 4, '0', STR_PAD_LEFT);

        // Ensure uniqueness (in case of race conditions)
        while (Booking::queueExists($queueNumber)) {
            $todayCount++;
            $queueNumber = $prefix . str_pad($todayCount, 4, '0', STR_PAD_LEFT);
        }

        return $queueNumber;
    }

    /**
     * Store booking in database
     */
    public function storeBooking(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'service' => 'required|string|in:Regular Haircut,Kids Haircut,Styling / Shape,Hair Coloring & Full Treatment,Full Package',
        ]);

        try {
            // Use database transaction for consistency
            DB::beginTransaction();

            // Get service price
            $prices = [
                'Regular Haircut' => 300,
                'Kids Haircut' => 200,
                'Styling / Shape' => 150,
                'Hair Coloring & Full Treatment' => 500,
                'Full Package' => 1000,
            ];

            // Generate unique queue number
            $queueNumber = $this->generateQueueNumber();

            // Count pending bookings to set position
            $position = Booking::where('status', 'pending')->count() + 1;

            // Create booking
            $booking = Booking::create([
                'customer_name' => $validated['customer_name'],
                'phone_number' => $validated['phone_number'],
                'service' => $validated['service'],
                'price' => $prices[$validated['service']],
                'queue_number' => $queueNumber,
                'status' => 'pending',
                'booking_date' => now(),
                'position_in_queue' => $position,
            ]);

            DB::commit();

            // Return success response with queue details
            return response()->json([
                'success' => true,
                'queue_number' => $queueNumber,
                'customer_name' => $booking->customer_name,
                'service' => $booking->service,
                'price' => $booking->price,
                'position' => $position,
                'message' => 'Booking successful! Please save your queue number.',
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Error creating booking. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display contact page
     */
    public function contact()
    {
        $businessInfo = [
            'name' => 'Nice Barber',
            'location' => 'Bahir Dar, in front of the Stadium (ስታዲየም ፊት ለፊት)',
            'coordinates' => '11.587644, 37.381240',
            'phone' => '0918289788',
            'email' => 'nicebarber@email.com',
            'chairs' => 4,
            'barbers' => 4,
            'open_time' => '08:00 AM',
            'close_time' => '06:00 PM',
        ];

        return view('contact', compact('businessInfo'));
    }

    /**
     * Get queue status (AJAX endpoint)
     */
    public function getQueueStatus($queueNumber)
    {
        $booking = Booking::where('queue_number', $queueNumber)->first();

        if (!$booking) {
            return response()->json([
                'success' => false,
                'message' => 'Queue number not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'queue_number' => $booking->queue_number,
            'customer_name' => $booking->customer_name,
            'service' => $booking->service,
            'status' => $booking->status,
            'position' => $booking->position_in_queue,
            'created_at' => $booking->created_at->format('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Display current queue (for barbers/staff view)
     */
    public function queue()
    {
        $bookings = Booking::orderBy('position_in_queue')
            ->where('status', '!=', 'completed')
            ->where('status', '!=', 'cancelled')
            ->get();

        return view('queue', compact('bookings'));
    }
}
