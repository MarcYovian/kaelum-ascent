<div class="min-h-screen pt-16">
    {{-- Hero Section --}}
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20"
            style="background-image: url('{{ asset('images/services-hero.jpg') }}')">
        </div>
        <div class="absolute inset-0 bg-background/90"></div>

        <div class="relative z-10 container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Digital Solutions Designed for
                <span class="text-gradient">Business Growth</span>
            </h1>

            <p class="text-xl text-muted-foreground max-w-4xl mx-auto animate-fade-in-up" style="animation-delay: 200ms;">
                Every business has a unique story. We craft digital experiences that tell that story,
                converting online visitors into loyal customers. Find the right package to begin your digital ascent.
            </p>
        </div>
    </section>

    {{-- Packages Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Website Development <span class="text-gradient">Packages</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto items-stretch">
                @foreach ($packages as $index => $package)
                    <div @class([
                        'relative',
                        'animate-fade-in-up',
                        'interactive-lift',
                        'z-10 scale-105' => $package['popular'],
                    ]) style="animation-delay: {{ $index * 100 }}ms">

                        @if ($package['popular'])
                            <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 z-20">
                                <div
                                    class="bg-primary text-primary-foreground px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                    Most Popular
                                </div>
                            </div>
                        @endif

                        {{-- Card sudah memiliki h-full dan akan stretch sesuai item tertinggi di grid --}}
                        <x-card @class(['h-full', 'border-2 border-primary' => $package['popular']])>

                            <x-slot name="header" class="text-center pb-4 pt-10">
                                <h3 class="text-2xl font-heading font-bold text-foreground mb-2">
                                    {{ $package['name'] }}
                                </h3>
                                <p class="text-3xl font-bold text-primary mb-2">
                                    {{ $package['price'] }}
                                </p>
                                <p class="text-muted-foreground">
                                    {{ $package['description'] }}
                                </p>
                            </x-slot>

                            {{-- Cukup definisikan sebagai flex-col untuk mengatur layout di dalamnya --}}
                            <x-slot name="content" class="pt-6 flex flex-col">
                                {{-- flex-grow di sini akan membuat <ul> memenuhi area slot content --}}
                                <ul class="space-y-3 mb-8 flex-grow">
                                    @foreach ($package['features'] as $feature)
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-5 h-5 text-primary mr-3 mt-0.5 flex-shrink-0">
                                                <path d="M20 6 9 17l-5-5" />
                                            </svg>
                                            <span class="text-muted-foreground">{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </x-slot>

                            <x-slot name="footer" class="text-center">
                                {{-- class 'mt-auto' sudah tidak diperlukan lagi --}}
                                <x-button href="/contact" variant="{{ $package['popular'] ? 'default' : 'outline' }}"
                                    class="w-full">
                                    Select Package
                                </x-button>
                            </x-slot>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Our Collaboration <span class="text-gradient">Process</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                @php
                    $processIcons = ['message-square', 'palette', 'rocket', 'headphones'];
                @endphp
                @foreach ($process as $index => $step)
                    <x-card class="interactive-lift animate-fade-in-up text-center"
                        style="animation-delay: {{ $index * 100 }}ms">
                        <x-slot name="content" class="p-8">
                            <div
                                class="flex items-center justify-center w-16 h-16 bg-primary/10 rounded-xl my-6 mx-auto">
                                @if ($processIcons[$index] === 'message-square')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                    </svg>
                                @elseif($processIcons[$index] === 'palette')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <circle cx="12" cy="5" r="3" />
                                        <path
                                            d="M6.5 12.5c0 .6.4 1 1 1h1c.6 0 1-.4 1-1v-1c0-.6-.4-1-1-1h-1c-.6 0-1 .4-1 1v1Z" />
                                        <path
                                            d="M14.5 12.5c0 .6.4 1 1 1h1c.6 0 1-.4 1-1v-1c0-.6-.4-1-1-1h-1c-.6 0-1 .4-1 1v1Z" />
                                        <path d="M18 22s-2-2-5-2-5 2-5 2" />
                                        <path d="M12 22v-4" />
                                    </svg>
                                @elseif($processIcons[$index] === 'rocket')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <path
                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.3.5-3.5-1.17-1.17-2.66-.99-3.5-.5Z" />
                                        <path
                                            d="m12 15.5 3.5-3.5C14.53 11.03 14 10.06 13 9c-1.06-1.06-2.03-.53-2.97.41L15.5 12" />
                                        <path d="m9 13 2.5 2.5" />
                                        <path d="m12 15.5 3.5-3.5" />
                                        <path
                                            d="M18.5 8.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.3.5-3.5-1.17-1.17-2.66-.99-3.5-.5Z" />
                                    </svg>
                                @elseif($processIcons[$index] === 'headphones')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary">
                                        <path
                                            d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3" />
                                    </svg>
                                @endif
                            </div>
                            <div class="text-2xl font-bold text-primary mb-2">
                                {{ $step['step'] }}
                            </div>
                            <h3 class="text-xl font-heading font-semibold text-foreground mb-4">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-muted-foreground leading-relaxed">
                                {{ $step['description'] }}
                            </p>
                        </x-slot>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 bg-card">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Frequently Asked <span class="text-gradient">Questions</span>
                </h2>
            </div>

            <div class="max-w-4xl mx-auto">
                <x-accordion.index type="single" collapsible class="space-y-4">
                    @foreach ($faqs as $index => $faq)
                        <x-accordion.item value="item-{{ $index }}" class="bg-background rounded-lg border">
                            <x-accordion.trigger class="px-6 py-4 text-left hover:no-underline">
                                <span class="text-lg font-semibold text-foreground">
                                    {{ $faq['question'] }}
                                </span>
                            </x-accordion.trigger>
                            <x-accordion.content class="px-6 pb-4">
                                <p class="text-muted-foreground leading-relaxed">
                                    {{ $faq['answer'] }}
                                </p>
                            </x-accordion.content>
                        </x-accordion.item>
                    @endforeach
                </x-accordion.index>
            </div>
        </div>
    </section>

    {{-- Final CTA Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Let's Build Your Brand's <span class="text-gradient">Digital Future</span>
            </h2>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <x-button href="/contact" variant="hero" size="lg" class="animate-fade-in-up"
                    style="animation-delay: 200ms;">
                    Contact Us Now
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-2">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </x-button>
                <x-button href="/portfolio" variant="outline" size="lg" class="animate-fade-in-up"
                    style="animation-delay: 300ms;">
                    See Our Portfolio
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-2">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </x-button>
            </div>
        </div>
    </section>
</div>
