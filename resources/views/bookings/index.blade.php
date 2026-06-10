@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="mb-0">📅 Laporan Booking Studio The Hunk</h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('bookings.export-excel') }}" class="btn btn-success btn-sm">
                <i class="bi bi-file-earmark-excel"></i> Export Excel
            </a>
            <a href="{{ route('bookings.export-pdf') }}" class="btn btn-danger btn-sm">
                <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
        </div>
    </div>

    @if($bookings->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
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
                    <td>{{ $bookings->firstItem() + $key }}</td>
                    <td><strong>{{ $booking->user->name }}</strong></td>
                    <td>{{ $booking->studioRoom->name }}</td>
                    <td>{{ $booking->booking_date->format('d-m-Y') }}</td>
                    <td>{{ $booking->start_time }} - {{ $booking->end_time }}</td>
                    <td>
                        <span class="badge bg-dark">
                            {{ ucfirst($booking->status) }}
                        </span>
                    </td>
                    <td><strong>Rp {{ number_format($booking->total_price, 2, ',', '.') }}</strong></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <nav>
        {{ $bookings->links() }}
    </nav>
    @else
    <div class="alert alert-info">
        <i class="bi bi-info-circle"></i> Tidak ada data booking saat ini.
    </div>
    @endif
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection
