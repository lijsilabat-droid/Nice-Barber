<?php

use App\Http\Controllers\BarberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main pages
Route::get('/', [BarberController::class, 'index'])->name('home');
Route::get('/services', [BarberController::class, 'services'])->name('services');
Route::get('/team', [BarberController::class, 'team'])->name('team');
Route::get('/contact', [BarberController::class, 'contact'])->name('contact');

// Booking routes
Route::get('/booking', [BarberController::class, 'showBookingForm'])->name('booking.form');
Route::post('/booking', [BarberController::class, 'storeBooking'])->name('booking.store');

// Queue management routes
Route::get('/queue', [BarberController::class, 'queue'])->name('queue.view');
Route::get('/queue-status/{queueNumber}', [BarberController::class, 'getQueueStatus'])->name('queue.status');
