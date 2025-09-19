<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Kaelum Ascent' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
    @livewireStyles
</head>

<body class="bg-background text-foreground antialiased">
    <div class="relative min-h-screen">
        <x-partials.navigation />

        <main>
            {{ $slot }}
        </main>

        <x-partials.footer />
    </div>

    @stack('scripts')
    @livewireScripts
</body>

</html>
