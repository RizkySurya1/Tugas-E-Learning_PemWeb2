<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Booking Studio The Hunk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 3px solid #1F4788;
            padding-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            color: #1F4788;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background-color: #1F4788;
            color: white;
            padding: 12px;
            text-align: left;
            font-weight: bold;
            border: 1px solid #1F4788;
        }
        td {
            padding: 10px 12px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
            color: #999;
        }
        .total-row {
            background-color: #e8f1f8;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎸 STUDIO THE HUNK</h1>
        <p>Laporan Booking Studio</p>
        <p>Tanggal Cetak: {{ now()->format('d-m-Y H:i:s') }}</p>
    </div>

    @if($bookings->count() > 0)
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Ruang Studio</th>
                <th>Tanggal Booking</th>
                <th>Jam Mulai - Selesai</th>
                <th>Status</th>
                <th>Harga Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $key => $booking)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $booking->user->name }}</td>
                <td>{{ $booking->studioRoom->name }}</td>
                <td>{{ $booking->booking_date->format('d-m-Y') }}</td>
                <td>{{ $booking->start_time }} - {{ $booking->end_time }}</td>
                <td>{{ ucfirst($booking->status) }}</td>
                <td>Rp {{ number_format($booking->total_price, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="6" style="text-align: right;">Total Pendapatan:</td>
                <td>Rp {{ number_format($bookings->sum('total_price'), 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    @else
    <p style="text-align: center; color: #999;">Tidak ada data booking untuk ditampilkan.</p>
    @endif

    <div class="footer">
        <p>Laporan ini digenerate secara otomatis oleh Sistem Studio The Hunk</p>
    </div>
</body>
</html>
