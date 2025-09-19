<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-foreground antialiased">
    <x-partials.navigation />
    <main class="pt-4">
        <div class="flex min-h-screen items-center justify-center bg-background pt-4">
            <div class="text-center max-w-2xl mx-auto px-4">
                <div class="mb-8">
                    <h1 class="text-8xl font-heading font-bold text-primary mb-4 animate-fade-in-up">
                        @yield('code')
                    </h1>
                    <h2
                        class="text-3xl md:text-4xl font-heading font-bold text-foreground mb-4 animate-fade-in-up animate-delay-100">
                        @yield('title')
                    </h2>
                    <p class="text-xl text-muted-foreground mb-8 animate-fade-in-up animate-delay-200">
                        @yield('message')
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animate-delay-300">
                    <x-button variant="default" size="lg" href="{{ route('home') }}">
                        <x-heroicon-o-home class="mr-2 w-5 h-5" />
                        Return Home
                    </x-button>

                    <x-button variant="outline" size="lg">
                        <x-heroicon-o-arrow-left class="mr-2 w-5 h-5" />
                        Contact Us
                    </x-button>
                </div>

                <div class="mt-8 text-sm text-muted-foreground animate-fade-in-up animate-delay-400">
                    <p>If you believe this is an error, please contact our support team.</p>
                </div>
            </div>
        </div>
    </main>
    <x-partials.footer />
</body>

</html>
