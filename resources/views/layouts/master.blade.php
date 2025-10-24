<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Try Lara</title>
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- CONTENT --}}
    <div class="h-full bg-black">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layouts.footer')
</body>
</html>
