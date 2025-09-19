<div class="min-h-screen">
    {{-- Hero Section --}}
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-30"
            style="background-image: url('{{ asset('images/team-hero.jpg') }}')">
        </div>
        <div class="absolute inset-0 bg-background/85"></div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Behind the Code and Design, a Passion for
                <span class="text-gradient">Mutual Growth</span>
            </h1>

            <p class="text-xl text-muted-foreground max-w-4xl mx-auto animate-fade-in-up" style="animation-delay: 200ms;">
                Kaelum Ascent was born from a simple belief: great Indonesian brands deserve a digital stage
                as exceptional as they are. We are creative partners, passionate about telling your story
                through a strategic blend of technology and visual aesthetics.
            </p>
        </div>
    </section>

    {{-- Our Story Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in-up">
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-8">
                        Our Journey: From Shared Passion to
                        <span class="text-gradient">Digital Solutions</span>
                    </h2>

                    <div class="space-y-6 text-lg text-muted-foreground leading-relaxed">
                        <p>
                            Our story began in Surabaya, sparked by a shared passion for technology and a keen
                            observation: many incredible businesses had yet to unlock their full potential online.
                            We saw talented entrepreneurs with amazing products and services, but their digital
                            presence didn't reflect their true quality.
                        </p>
                        <p>
                            Fueled by expertise in technology, design, and strategy, we decided to build a bridge.
                            That bridge is Kaelum Ascent, symbolizing our mission to help every brand begin its
                            digital 'ascent' to reach new heights of success and recognition.
                        </p>
                    </div>
                </div>

                <div class="animate-slide-in-right">
                    <x-card class="interactive-lift">
                        <x-slot name="content" class="p-8">
                            <div class="text-center">
                                <div
                                    class="w-20 h-20 bg-primary/10 rounded-2xl mx-auto my-6 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-primary">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-heading font-bold text-foreground mb-4">
                                    Our Mission
                                </h3>
                                <p class="text-muted-foreground leading-relaxed">
                                    To empower Indonesian businesses with world-class digital solutions that drive
                                    growth, build trust, and create lasting connections with their customers.
                                </p>
                            </div>
                        </x-slot>
                    </x-card>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="py-20 bg-card">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Meet Our <span class="text-gradient">Team</span>
                </h2>

                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    The passionate individuals behind every successful project, bringing together diverse
                    skills and shared values to deliver exceptional results.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($team as $index => $member)
                    <x-card class="interactive-lift animate-fade-in-up" style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="content" class="p-8 text-center">
                            {{-- Profile Image Placeholder --}}
                            <div
                                class="w-32 h-32 bg-primary/10 rounded-full mx-auto my-6 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16 text-primary">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>

                            <h3 class="text-xl font-heading font-bold text-foreground mb-2">
                                {{ $member['name'] }}
                            </h3>

                            <p class="text-primary font-semibold mb-4">
                                {{ $member['role'] }}
                            </p>

                            <p class="text-muted-foreground leading-relaxed mb-6">
                                {{ $member['bio'] }}
                            </p>

                            <div class="flex flex-wrap gap-2 justify-center">
                                @foreach ($member['expertise'] as $skill)
                                    <span class="text-xs text-primary bg-primary/10 px-3 py-1 rounded-full">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Core Principles Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Our Core <span class="text-gradient">Principles</span>
                </h2>

                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    The fundamental values that guide every decision we make and every project we undertake.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($principles as $index => $principle)
                    <x-card class="interactive-lift animate-fade-in-up text-center"
                        style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="content" class="p-8">
                            <div
                                class="flex items-center justify-center w-16 h-16 bg-primary/10 rounded-xl my-6 mx-auto">
                                @if ($principle['icon'] === 'handshake')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <path
                                            d="M11 17a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1Z" />
                                        <path
                                            d="M12 2a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-1Z" />
                                        <path
                                            d="M19 12a7 7 0 0 1-7 7h-1a7 7 0 0 1-7-7v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3Z" />
                                    </svg>
                                @elseif ($principle['icon'] === 'eye')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                @elseif ($principle['icon'] === 'heart')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                    </svg>
                                @elseif ($principle['icon'] === 'users')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                @endif
                            </div>
                            <h3 class="text-lg font-heading font-semibold text-foreground mb-4">
                                {{ $principle['title'] }}
                            </h3>
                            <p class="text-muted-foreground leading-relaxed text-sm">
                                {{ $principle['description'] }}
                            </p>
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
                Let's Write Your Success Story,
                <span class="text-gradient">Together</span>
            </h2>
            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto animate-fade-in-up"
                style="animation-delay: 200ms;">
                Ready to start your digital transformation journey? We're excited to learn about your
                vision and help you achieve your goals.
            </p>
            <x-button href="/contact" variant="hero" size="lg" class="animate-fade-in-up"
                style="animation-delay: 400ms;">
                Get In Touch
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
