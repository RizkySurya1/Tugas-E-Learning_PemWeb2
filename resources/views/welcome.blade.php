@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
    <section id="beranda" class="hero py-5">
        <div class="container py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold">{{ $systemName }}</h1>
                    <p class="lead mb-4">{{ $tagline }}</p>
                    <a href="#fitur" class="btn btn-outline-light btn-lg">Lihat Fitur</a>
                </div>
                <div class="col-lg-6">
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/foto1.png') }}" class="d-block w-100 carousel-image" alt="Foto studio musik 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/foto2.png') }}" class="d-block w-100 carousel-image" alt="Foto studio musik 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/foto3.png') }}" class="d-block w-100 carousel-image" alt="Foto studio musik 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Fitur Utama</h2>
            <div class="row g-4">
                @foreach ($features as $feature)
                    <div class="col-md-6 col-lg-3">
                        <div class="card feature-card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $feature['title'] }}</h5>
                                <p class="card-text text-muted">{{ $feature['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="tentang" class="py-5 bg-dark border-top border-bottom border-secondary">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Tentang Sistem</h2>
            <p class="text-center text-muted mx-auto" style="max-width: 760px;">
                {{ $about }}
            </p>
            <div class="row text-center mt-4">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="p-3 bg-light rounded">
                        <h3 class="fw-bold mb-1">{{ $stats['users'] }}</h3>
                        <p class="mb-0 text-muted">Pelanggan Terdaftar</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="p-3 bg-light rounded">
                        <h3 class="fw-bold mb-1">{{ $stats['items'] }}</h3>
                        <p class="mb-0 text-muted">Sesi Booking Bulanan</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded">
                        <h3 class="fw-bold mb-1">{{ $stats['uptime'] }}</h3>
                        <p class="mb-0 text-muted">Kepuasan Pelanggan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
