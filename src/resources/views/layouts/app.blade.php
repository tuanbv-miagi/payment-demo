<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Demo App') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div style="margin-left: 6rem;">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Demo App') }}
            </a>
        </div>
    </nav>

    {{-- Nội dung chính --}}
    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-light text-center py-3 mt-auto">
        <p class="mb-0">&copy; {{ date('Y') }} Demo App. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
