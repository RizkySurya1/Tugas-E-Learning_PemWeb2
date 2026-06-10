@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="mb-0">📦 Paket Layanan Studio The Hunk</h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('packages.export-excel') }}" class="btn btn-success btn-sm">
                <i class="bi bi-file-earmark-excel"></i> Export Excel
            </a>
            <a href="{{ route('packages.export-pdf') }}" class="btn btn-danger btn-sm">
                <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
        </div>
    </div>

    @if($packages->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Durasi</th>
                    <th>Termasuk</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages as $key => $package)
                <tr>
                    <td>{{ $packages->firstItem() + $key }}</td>
                    <td><strong>{{ $package->name }}</strong></td>
                    <td>{{ Str::limit($package->description, 40) }}</td>
                    <td><strong>Rp {{ number_format($package->price, 2, ',', '.') }}</strong></td>
                    <td>{{ $package->duration_hours }} jam</td>
                    <td>{{ Str::limit($package->includes, 40) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <nav>
        {{ $packages->links() }}
    </nav>
    @else
    <div class="alert alert-info">
        <i class="bi bi-info-circle"></i> Tidak ada paket layanan saat ini.
    </div>
    @endif
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection
