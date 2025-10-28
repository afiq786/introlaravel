<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>

<body class="min-h-screen bg-slate-200">
    {{-- NAVBAR  --}}
    @include('layouts.navbar')

    {{-- CONTENT --}}
    @yield('content')

</body>

</html>
