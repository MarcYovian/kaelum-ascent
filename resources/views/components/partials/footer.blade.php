<footer class="bg-card border-t border-border">
    <div class="container px-4 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">

            {{-- Kolom 1: Logo dan Misi --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}"
                    class="inline-block mb-4 text-2xl font-bold transition-transform duration-300 font-heading text-gradient hover:scale-105">
                    Kaelum Ascent
                </a>
                <p class="text-sm leading-relaxed text-muted-foreground">
                    Elevating Indonesian brands to their digital peak through innovative web solutions,
                    stunning design, and strategic digital presence.
                </p>
            </div>

            {{-- Kolom 2: Quick Links --}}
            <div>
                <h3 class="mb-4 font-semibold font-heading text-foreground">Quick Links</h3>
                <ul class="space-y-2">
                    {{-- Ganti route() dengan nama rute yang sesuai di web.php --}}
                    <li><a href="{{ route('home') }}"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">Home</a>
                    </li>
                    <li><a href="#"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">Our
                            Services</a></li>
                    <li><a href="#"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">Our
                            Portfolio</a></li>
                    <li><a href="#"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">About
                            Us</a></li>
                    <li><a href="#"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">Contact</a>
                    </li>
                </ul>
            </div>

            {{-- Kolom 3: Info Kontak --}}
            <div>
                <h3 class="mb-4 font-semibold font-heading text-foreground">Contact Info</h3>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3">
                        {{-- SVG untuk ikon Mail --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="text-primary">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        <a href="mailto:hello@kaelumascent.com"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">
                            hello@kaelumascent.com
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        {{-- SVG untuk ikon MessageCircle --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="text-primary">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                        </svg>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">
                            WhatsApp Chat
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        {{-- SVG untuk ikon MapPin --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="text-primary">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span class="text-sm text-muted-foreground">
                            Surabaya, Indonesia
                        </span>
                    </li>
                </ul>
            </div>

            {{-- Kolom 4: Media Sosial --}}
            <div>
                <h3 class="mb-4 font-semibold font-heading text-foreground">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://linkedin.com/company/kaelumascent" target="_blank" rel="noopener noreferrer"
                        class="flex items-center justify-center w-10 h-10 transition-colors duration-300 rounded-lg bg-muted text-muted-foreground hover:bg-primary hover:text-primary-foreground interactive-lift">
                        {{-- SVG untuk ikon Linkedin --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect width="4" height="12" x="2" y="9" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                    <a href="https://instagram.com/kaelumascent" target="_blank" rel="noopener noreferrer"
                        class="flex items-center justify-center w-10 h-10 transition-colors duration-300 rounded-lg bg-muted text-muted-foreground hover:bg-primary hover:text-primary-foreground interactive-lift">
                        {{-- SVG untuk ikon Instagram --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="pt-8 mt-8 border-t border-border">
            <div class="flex flex-col items-center justify-between space-y-2 md:flex-row md:space-y-0">
                <p class="text-sm text-muted-foreground">
                    © {{ date('Y') }} Kaelum Ascent. All rights reserved.
                </p>
                <p class="text-sm text-muted-foreground">
                    Crafted with ❤️ in Surabaya, Indonesia
                </p>
            </div>
        </div>
    </div>
</footer>
