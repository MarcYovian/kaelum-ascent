<div class="min-h-screen">
    {{-- Hero Section --}}
    <section class="relative flex min-h-screen items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('images/hero-main.jpg') }}')">
            <div class="absolute inset-0 bg-background/80"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-7xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Elevating Your Brand to its
                <span class="text-gradient">Digital Peak</span>
            </h1>

            <p class="text-xl md:text-2xl text-muted-foreground max-w-4xl mx-auto mb-8 animate-fade-in-up"
                style="animation-delay: 200ms;">
                We blend premium web design with professional digital strategy to help businesses
                across Indonesia build an unforgettable online presence.
            </p>

            <x-button href="/services" variant="hero" size="lg" class="animate-fade-in-up"
                style="animation-delay: 400ms;">
                Explore Our Services
                {{-- ArrowRight Icon --}}
                <i class="fa-solid fa-arrow-right ml-2 h-5 w-5"></i>
            </x-button>
        </div>
    </section>

    {{-- Problem & Empathy Section --}}
    <section class="py-20 bg-card">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                    In a Crowded Digital World, Standing Out is
                    <span class="text-gradient">Everything</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($problems as $index => $problem)
                    {{-- Contoh 1: Kartu Produk dengan semua slot --}}
                    <x-card class="interactive-lift animate-fade-in-up" style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="content" class="pt-8 text-center">
                            <div class="text-4xl mb-4">{{ $problem['icon'] }}</div>
                            <h3 class="text-xl font-heading font-semibold text-foreground mb-4">
                                {{ $problem['title'] }}
                            </h3>
                            <p class="text-muted-foreground leading-relaxed">
                                {{ $problem['description'] }}
                            </p>
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Our Solutions Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Our <span class="text-gradient">Solutions</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($solutions as $index => $solution)
                    <x-card class="group interactive-lift animate-fade-in-up"
                        style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="content" class="p-8">
                            <div
                                class="flex items-center justify-center w-16 h-16 bg-primary/10 rounded-xl my-6 group-hover:bg-primary/20 transition-colors">
                                <i class="{{ $solution['icon'] }} fa-xl text-primary"></i>
                            </div>

                            <h3 class="text-xl font-heading font-semibold text-foreground mb-4">
                                {{ $solution['title'] }}
                            </h3>

                            <p class="text-muted-foreground mb-6 leading-relaxed">
                                {{ $solution['description'] }}
                            </p>

                            <ul class="space-y-2">
                                @foreach ($solution['features'] as $feature)
                                    <li class="flex items-center text-sm text-muted-foreground">
                                        {{-- CheckCircle Icon --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="w-4 h-4 text-primary mr-2">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <polyline points="22 4 12 14.01 9 11.01" />
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </x-slot>
                    </x-card>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <x-button href="/services" variant="outline" size="lg">
                    Learn More About Our Services
                    {{-- ArrowRight Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-2 h-5 w-5">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </x-button>
            </div>
        </div>
    </section>

    {{-- Portfolio Highlight Section --}}
    <section class="py-20 bg-card">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in-up">
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                        Our Recent <span class="text-gradient">Work</span>
                    </h2>

                    <h3 class="text-2xl font-heading font-semibold text-foreground mb-4">
                        Anakala Project - Building a Powerful Digital Identity
                    </h3>

                    <p class="text-muted-foreground text-lg leading-relaxed mb-8">
                        We partnered with Anakala, a rising brand, to design an elegant website,
                        conduct a professional photoshoot, and create an online experience that
                        captivates their target market.
                    </p>

                    <x-button href="/portfolio" variant="default" size="lg">
                        View Full Portfolio
                        {{-- ArrowRight Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="ml-2 h-5 w-5">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </x-button>
                </div>

                <div class="animate-slide-in-right">
                    <div class="bg-muted rounded-2xl p-8 h-96 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary rounded-xl mx-auto mb-4 flex items-center justify-center">
                                {{-- Code Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="w-8 h-8 text-primary-foreground">
                                    <polyline points="16 18 22 12 16 6" />
                                    <polyline points="8 6 2 12 8 18" />
                                </svg>
                            </div>
                            <p class="text-muted-foreground">Portfolio Showcase Coming Soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Us Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Why Partner with <span class="text-gradient">Kaelum Ascent</span>?
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($whyUs as $index => $item)
                    <x-card class="card-hover animate-fade-in-up" style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="content" class="p-8 text-center">
                            <div
                                class="flex items-center justify-center w-16 h-16 bg-primary/10 rounded-xl my-6 mx-auto">
                                <i class="{{ $item['icon'] }} fa-xl text-primary"></i>
                            </div>

                            <h3 class="text-xl font-heading font-semibold text-foreground mb-4">
                                {{ $item['title'] }}
                            </h3>

                            <p class="text-muted-foreground leading-relaxed">
                                {{ $item['description'] }}
                            </p>
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA Section --}}
    <section class="py-20 bg-gradient-to-r from-primary/10 via-primary/5 to-primary/10">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Ready to Elevate Your Brand to the
                <span class="text-gradient">Next Level</span>?
            </h2>

            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto animate-fade-in-up"
                style="animation-delay: 200ms;">
                Let's discuss how we can help bring your vision to life.
            </p>

            <x-button href="/contact" variant="hero" size="lg" class="animate-fade-in-up"
                style="animation-delay: 400ms;">
                Discuss Your Project Now
                {{-- ArrowRight Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="ml-2 h-5 w-5">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </x-button>
        </div>
    </section>
</div>
