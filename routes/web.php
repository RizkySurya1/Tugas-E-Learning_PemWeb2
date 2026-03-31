<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'appName' => 'Studio The Hunk',
        'systemName' => 'Sistem Informasi Studio The Hunk',
        'tagline' => 'Kelola booking studio, jadwal sesi latihan, paket layanan, dan data pelanggan dalam satu sistem terintegrasi.',
        'about' => 'Sistem ini membantu admin studio dan musisi dalam proses pemesanan ruang latihan, manajemen jadwal, pencatatan transaksi, hingga monitoring riwayat penggunaan studio secara real-time.',
        'owner' => 'Mahasiswa Universitas Teknologi Bandung',
        'studentName' => 'Rizky Surya Diputra',
        'studentNim' => '23552011390',
        'course' => 'Pemogramman Web 2',
        'year' => now()->year,
        'features' => [
            [
                'title' => 'Booking Studio Online',
                'description' => 'Pelanggan dapat memesan ruang studio dengan cepat berdasarkan slot waktu yang tersedia.',
            ],
            [
                'title' => 'Manajemen Jadwal',
                'description' => 'Atur jadwal latihan, rekaman, dan sesi band agar tidak bentrok antar pelanggan.',
            ],
            [
                'title' => 'Paket Layanan',
                'description' => 'Kelola paket sewa studio, rekaman, dan mixing sesuai kebutuhan pelanggan.',
            ],
            [
                'title' => 'Laporan Transaksi',
                'description' => 'Pantau pendapatan, durasi penggunaan studio, dan performa layanan secara berkala.',
            ],
        ],
        'stats' => [
            'users' => '1',
            'items' => '1',
            'uptime' => '100%',
        ],
    ]);
});
