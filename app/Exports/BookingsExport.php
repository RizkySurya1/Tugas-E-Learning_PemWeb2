<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookingsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Booking::with(['user', 'studioRoom'])->get()->map(function ($booking) {
            return [
                'ID' => $booking->id,
                'Pelanggan' => $booking->user->name,
                'Ruang Studio' => $booking->studioRoom->name,
                'Tanggal Booking' => $booking->booking_date->format('d-m-Y'),
                'Jam Mulai' => $booking->start_time,
                'Jam Selesai' => $booking->end_time,
                'Status' => ucfirst($booking->status),
                'Harga Total' => number_format($booking->total_price, 0, ',', '.'),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Pelanggan',
            'Ruang Studio',
            'Tanggal Booking',
            'Jam Mulai',
            'Jam Selesai',
            'Status',
            'Harga Total',
        ];
    }
}
