<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Studio The Hunk - Laporan') - Studio The Hunk</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #f5f5f5;
            --secondary-color: #bfbfbf;
            --surface-color: #0f0f0f;
            --surface-border: #242424;
        }
        
        body {
            background:
                radial-gradient(circle at 15% 20%, rgba(255,255,255,0.08), transparent 45%),
                radial-gradient(circle at 85% 10%, rgba(255,255,255,0.05), transparent 40%),
                #000000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f3f3f3;
            min-height: 100vh;
        }
        
        .navbar {
            background: rgba(0, 0, 0, 0.85);
            border-bottom: 1px solid #2a2a2a;
            box-shadow: 0 6px 20px rgba(0,0,0,0.35);
            backdrop-filter: blur(6px);
        }
        
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .navbar-brand i {
            margin-right: 8px;
        }
        
        .nav-link {
            margin-left: 10px;
            margin-right: 10px;
            transition: color 0.3s;
        }
        
        .nav-link:hover {
            color: #ffffff !important;
        }
        
        .container {
            background: linear-gradient(180deg, rgba(20,20,20,0.95), rgba(10,10,10,0.95));
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
            margin-top: 30px;
            padding: 30px;
            border: 1px solid var(--surface-border);
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        p,
        .lead,
        .text-muted,
        .small,
        small,
        label,
        th,
        td {
            color: #e0e0e0 !important;
        }
        
        .table thead {
            background-color: #111111;
            color: #ffffff;
        }

        .table {
            --bs-table-bg: transparent;
            --bs-table-color: #ececec;
            --bs-table-striped-bg: rgba(255, 255, 255, 0.04);
            --bs-table-striped-color: #ececec;
            --bs-table-hover-bg: rgba(255, 255, 255, 0.08);
            --bs-table-hover-color: #ffffff;
            border-color: #2d2d2d;
        }
        
        .btn-success,
        .btn-danger,
        .btn-primary,
        .btn-warning,
        .btn-info {
            background-color: #ffffff !important;
            border-color: #ffffff !important;
            color: #111111 !important;
            font-weight: 600;
            border-radius: 5px;
            padding: 5px 12px;
            font-size: 0.9rem;
        }
        
        .btn-success:hover,
        .btn-danger:hover,
        .btn-primary:hover,
        .btn-warning:hover,
        .btn-info:hover {
            background-color: #d9d9d9 !important;
            border-color: #d9d9d9 !important;
            color: #111111 !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .badge {
            background-color: #ffffff !important;
            color: #111111 !important;
            border: 1px solid #ffffff;
        }

        .alert-info {
            background-color: #141414;
            color: #f3f3f3;
            border: 1px solid #2d2d2d;
        }

        .card,
        .pagination .page-link {
            background-color: #111111;
            border-color: #2a2a2a;
            color: #f0f0f0;
        }

        .pagination .page-item.active .page-link {
            background-color: #ffffff;
            border-color: #ffffff;
            color: #111111;
        }

        .pagination .page-link:hover {
            background-color: #1f1f1f;
            color: #ffffff;
        }
        
        footer {
            background-color: #000 !important;
            margin-top: 50px;
            border-top: 1px solid #1f1f1f;
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <i class="bi bi-disc"></i> Studio The Hunk
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('bookings.*') ? 'active' : '' }}" href="{{ route('bookings.index') }}">
                            <i class="bi bi-calendar-event"></i> Booking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('packages.*') ? 'active' : '' }}" href="{{ route('packages.index') }}">
                            <i class="bi bi-box-seam"></i> Paket Layanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rooms.*') ? 'active' : '' }}" href="{{ route('rooms.index') }}">
                            <i class="bi bi-door-closed"></i> Ruang Studio
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0"><i class="bi bi-c-circle"></i> 2026 Studio The Hunk - Sistem Informasi Booking Studio</p>
            <small>Created by Rizky Surya Diputra (23552011390)</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>