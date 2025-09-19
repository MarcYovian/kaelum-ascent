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
                        <i class="fa-regular fa-envelope text-primary"></i>
                        <a href="mailto:hello@kaelumascent.com"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">
                            hello@kaelumascent.com
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        {{-- SVG untuk ikon MessageCircle --}}
                        <i class="fa-regular fa-message text-primary"></i>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer"
                            class="text-sm transition-colors duration-300 text-muted-foreground hover:text-primary">
                            WhatsApp Chat
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        {{-- SVG untuk ikon MapPin --}}
                        <i class="fa-solid fa-location-dot text-primary"></i>
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
                        <i class="fa-brands fa-linkedin-in text-primary"></i>
                    </a>
                    <a href="https://instagram.com/kaelumascent" target="_blank" rel="noopener noreferrer"
                        class="flex items-center justify-center w-10 h-10 transition-colors duration-300 rounded-lg bg-muted text-muted-foreground hover:bg-primary hover:text-primary-foreground interactive-lift">
                        {{-- SVG untuk ikon Instagram --}}
                        <i class="fa-brands fa-instagram text-primary"></i>
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
