@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="mb-0">🎙️ Daftar Ruang Studio The Hunk</h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('rooms.export-pdf') }}" class="btn btn-danger btn-sm">
                <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
        </div>
    </div>

    @if($rooms->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Ruang</th>
                    <th>Kapasitas</th>
                    <th>Peralatan</th>
                    <th>Harga/Jam</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $key => $room)
                <tr>
                    <td>{{ $rooms->firstItem() + $key }}</td>
                    <td><strong>{{ $room->name }}</strong></td>
                    <td>{{ $room->capacity }} orang</td>
                    <td>{{ Str::limit($room->equipment, 30) }}</td>
                    <td><strong>Rp {{ number_format($room->rate_per_hour, 2, ',', '.') }}</strong></td>
                    <td>{{ Str::limit($room->description ?? '-', 40) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <nav>
        {{ $rooms->links() }}
    </nav>
    @else
    <div class="alert alert-info">
        <i class="bi bi-info-circle"></i> Tidak ada ruang studio saat ini.
    </div>
    @endif
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection
