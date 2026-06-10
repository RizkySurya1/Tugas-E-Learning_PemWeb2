<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\StudioRoom;
use App\Models\Booking;
use App\Models\ServicePackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test user
        $user = User::factory()->create([
            'name' => 'Admin Studio The Hunk',
            'email' => 'admin@studiothehunk.com',
        ]);

        // Create Studio Rooms
        StudioRoom::create([
            'name' => 'Studio A - Live Band',
            'capacity' => 8,
            'equipment' => 'Drum Kit, Bass, 2 Guitar Amp, Keyboard, Mixer 24Ch',
            'rate_per_hour' => 200000,
            'description' => 'Studio untuk latihan band dengan soundproof terbaik',
        ]);

        StudioRoom::create([
            'name' => 'Studio B - Recording',
            'capacity' => 4,
            'equipment' => 'Interface Audio Pro, Microphone Condenser, Acoustic Panel',
            'rate_per_hour' => 250000,
            'description' => 'Studio recording profesional dengan akustik sempurna',
        ]);

        StudioRoom::create([
            'name' => 'Studio C - Vokal Booth',
            'capacity' => 2,
            'equipment' => 'Vocal Booth, Microphone Neumann U87, Monitor Speaker',
            'rate_per_hour' => 300000,
            'description' => 'Ruang khusus recording vokal dengan teknologi terkini',
        ]);

        StudioRoom::create([
            'name' => 'Studio D - Drum Recording',
            'capacity' => 3,
            'equipment' => 'Drum Kit Profesional, Mic Set Drum, Audio Interface',
            'rate_per_hour' => 280000,
            'description' => 'Studio khusus recording drum dengan hasil suara maksimal',
        ]);

        StudioRoom::create([
            'name' => 'Ruang Mixing & Mastering',
            'capacity' => 2,
            'equipment' => 'Monitor Pair KRK, Mixing Console, Outboard Gear',
            'rate_per_hour' => 350000,
            'description' => 'Studio mixing dengan akustik studio profesional',
        ]);

        // Create Service Packages
        ServicePackage::create([
            'name' => 'Paket Recording 2 Jam',
            'description' => 'Sesi recording profesional dengan sound engineer berpengalaman',
            'price' => 500000,
            'duration_hours' => 2,
            'includes' => 'Recording, Mixing Basic, 1 Revisi',
        ]);

        ServicePackage::create([
            'name' => 'Paket Latihan Band 3 Jam',
            'description' => 'Ruang studio lengkap untuk latihan band dengan peralatan professional',
            'price' => 300000,
            'duration_hours' => 3,
            'includes' => 'Ruang AC, Soundcheck, Audio Recording',
        ]);

        ServicePackage::create([
            'name' => 'Paket Mixing & Mastering',
            'description' => 'Layanan mixing dan mastering untuk hasil maksimal',
            'price' => 750000,
            'duration_hours' => 4,
            'includes' => 'Mixing profesional, Mastering, 2 Revisi',
        ]);

        ServicePackage::create([
            'name' => 'Paket Vokal Recording Premium',
            'description' => 'Recording vokal profesional dengan teknologi terkini',
            'price' => 600000,
            'duration_hours' => 3,
            'includes' => 'Vocal booth khusus, Monitoring system, 2 Revisi',
        ]);

        ServicePackage::create([
            'name' => 'Paket Kolaborasi Band - 5 Jam',
            'description' => 'Paket lengkap untuk recording kolaborasi band',
            'price' => 1200000,
            'duration_hours' => 5,
            'includes' => 'Recording penuh, Basic mixing, Studio engineer, 1 Revisi',
        ]);

        // Create Bookings
        $rooms = StudioRoom::all();

        Booking::create([
            'user_id' => $user->id,
            'studio_room_id' => $rooms[0]->id,
            'booking_date' => now()->addDays(1),
            'start_time' => '09:00:00',
            'end_time' => '12:00:00',
            'status' => 'confirmed',
            'total_price' => 600000,
        ]);

        Booking::create([
            'user_id' => $user->id,
            'studio_room_id' => $rooms[1]->id,
            'booking_date' => now()->addDays(2),
            'start_time' => '14:00:00',
            'end_time' => '17:00:00',
            'status' => 'pending',
            'total_price' => 750000,
        ]);

        Booking::create([
            'user_id' => $user->id,
            'studio_room_id' => $rooms[2]->id,
            'booking_date' => now()->addDays(3),
            'start_time' => '10:00:00',
            'end_time' => '13:00:00',
            'status' => 'confirmed',
            'total_price' => 900000,
        ]);

        Booking::create([
            'user_id' => $user->id,
            'studio_room_id' => $rooms[3]->id,
            'booking_date' => now()->addDays(4),
            'start_time' => '15:00:00',
            'end_time' => '18:00:00',
            'status' => 'confirmed',
            'total_price' => 840000,
        ]);

        Booking::create([
            'user_id' => $user->id,
            'studio_room_id' => $rooms[4]->id,
            'booking_date' => now()->addDays(5),
            'start_time' => '11:00:00',
            'end_time' => '14:00:00',
            'status' => 'pending',
            'total_price' => 1050000,
        ]);
    }
}
