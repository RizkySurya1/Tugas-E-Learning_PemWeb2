<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Landing Page') - {{ $appName }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background: #000;
            color: #f1f3f5;
        }

        .hero {
            background: linear-gradient(135deg, #000 0%, #1a1a1a 100%);
            color: #fff;
        }

        .navbar,
        footer {
            background-color: #000 !important;
        }

        .card,
        .bg-light {
            background-color: #111 !important;
            color: #f1f3f5;
        }

        .text-muted {
            color: #adb5bd !important;
        }

        .carousel-image {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .carousel-image {
                height: 280px;
            }
        }

        .feature-card {
            transition: transform 0.2s ease;
        }

        .feature-card:hover {
            transform: translateY(-4px);
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>