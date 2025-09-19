<div class="min-h-screen">
    {{-- Hero Section --}}
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20"
            style="background-image: url('{{ asset('images/portfolio-hero.jpg') }}')">
        </div>
        <div class="absolute inset-0 bg-background/90"></div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Stories of Digital <span class="text-gradient">Transformation</span>
            </h1>

            <p class="text-xl text-muted-foreground max-w-4xl mx-auto animate-fade-in-up" style="animation-delay: 200ms;">
                Every project is a collaborative journey. We don't just build websites; we build digital stages
                for unique brand stories to shine. See how we partner with clients to turn vision into reality.
            </p>
        </div>
    </section>

    {{-- Project Stats Section --}}
    <section class="py-16 bg-card">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="animate-fade-in-up">
                    <div class="text-4xl font-bold text-primary mb-2">50+</div>
                    <p class="text-muted-foreground">Projects Completed</p>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 100ms;">
                    <div class="text-4xl font-bold text-primary mb-2">100%</div>
                    <p class="text-muted-foreground">Client Satisfaction</p>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 200ms;">
                    <div class="text-4xl font-bold text-primary mb-2">2+</div>
                    <p class="text-muted-foreground">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Gallery Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Our <span class="text-gradient">Portfolio</span>
                </h2>

                {{-- Category Filter --}}
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    @foreach ($categories as $index => $category)
                        <x-button variant="{{ $index === 0 ? 'default' : 'outline' }}" size="sm"
                            class="animate-fade-in-up" style="animation-delay: {{ $index * 100 }}ms">
                            {{ $category }}
                        </x-button>
                    @endforeach
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($projects as $index => $project)
                    <x-card class="group interactive-lift animate-fade-in-up"
                        style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="header" class="p-0">
                            <div class="relative overflow-hidden rounded-t-lg">
                                <div class="aspect-video bg-muted flex items-center justify-center">
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-primary/20 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-8 h-8 text-primary">
                                                <path d="M15 3h6v6" />
                                                <path d="M10 14 21 3" />
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                            </svg>
                                        </div>
                                        <p class="text-muted-foreground">Project Preview</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </div>
                        </x-slot>

                        <x-slot name="content" class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach ($project['tags'] as $tag)
                                    <span
                                        class="px-3 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-full">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>

                            <h3 class="text-xl font-heading font-semibold text-foreground mb-2">
                                {{ $project['title'] }}
                            </h3>

                            <p class="text-muted-foreground mb-6 leading-relaxed">
                                {{ $project['description'] }}
                            </p>

                            <x-button href="/portfolio/{{ $project['id'] }}" variant="outline" class="w-full">
                                View Case Study
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </x-button>
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="py-20 bg-card">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    What Our <span class="text-gradient">Partners Say</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($testimonials as $index => $testimonial)
                    <x-card class="interactive-lift animate-fade-in-up" style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="content" class="p-8">
                            <div class="flex items-center mb-4 mt-8">
                                @for ($i = 0; $i < $testimonial['rating']; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-yellow-400">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                    </svg>
                                @endfor
                            </div>

                            <blockquote class="text-muted-foreground leading-relaxed mb-6">
                                "{{ $testimonial['testimonial'] }}"
                            </blockquote>

                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-foreground">{{ $testimonial['name'] }}</div>
                                    <div class="text-sm text-muted-foreground">
                                        {{ $testimonial['title'] }}, {{ $testimonial['company'] }}
                                    </div>
                                </div>
                            </div>
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Could Your Brand Be <span class="text-gradient">Next</span>?
            </h2>

            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto animate-fade-in-up"
                style="animation-delay: 200ms;">
                Join our growing list of successful partners and start your digital transformation today.
            </p>

            <x-button href="/contact" variant="hero" size="lg" class="animate-fade-in-up"
                style="animation-delay: 400ms;">
                Discuss Your Project
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
