<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Kaelum Ascent' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
    @livewireStyles
</head>

<body class="bg-gray-700">
    <main class="">
        <h1 class="bg-red-300 text-sm">
            Hello world!
        </h1>
    </main>

    @stack('scripts')

    @livewireScripts
</body>

</html>
