<nav class="fixed top-0 left-0 right-0 z-50 bg-background/95 backdrop-blur-sm border-b border-border">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            {{-- Logo / Nama Website --}}
            <a href="/"
                class="text-2xl font-heading font-bold text-gradient hover:scale-105 transition-transform duration-300">
                Kaelum Ascent
            </a>

            {{-- Menu Navigasi untuk Desktop --}}
            <div class="hidden md:flex items-center space-x-8">
                <x-nav-link href="/" :active="request()->is('/')">
                    Home
                </x-nav-link>
                <x-nav-link href="/services" :active="request()->is('services')">
                    Our Services
                </x-nav-link>
                <x-nav-link href="/portfolio" :active="request()->is('portfolio')">
                    Our Portfolio
                </x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">
                    About Us
                </x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">
                    Contact
                </x-nav-link>
            </div>

            {{-- TODO: Tambahkan tombol menu untuk mobile di sini --}}
            <div class="md:hidden">
                {{-- Ikon hamburger menu bisa diletakkan di sini --}}
            </div>
        </div>
    </div>
</nav>
