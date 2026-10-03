<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('phone_number', 20);
            $table->string('service');
            $table->decimal('price', 10, 2);
            $table->string('queue_number', 32)->unique();
            $table->string('status')->default('pending');
            $table->dateTime('booking_date');
            $table->unsignedInteger('position_in_queue');
            $table->timestamps();

            $table->index('created_at');
            $table->index(['status', 'position_in_queue']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
