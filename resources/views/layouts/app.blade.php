<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dental Clinic System</title>
    <link rel="icon" href="{{ asset('icons/qr-code.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">

    <main class="p-6">
        @yield('content')
    </main>

    @livewireScripts

    @stack('scripts')
</body>
</html>
