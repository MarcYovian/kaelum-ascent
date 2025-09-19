<div class="min-h-screen">
    {{-- Header Section --}}
    <section class="py-20 bg-gradient-to-b from-background to-card">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-foreground mb-6 animate-fade-in-up">
                Let's Start Your <span class="text-gradient">Digital Ascent</span>
            </h1>

            <p class="text-xl text-muted-foreground max-w-4xl mx-auto animate-fade-in-up" style="animation-delay: 200ms;">
                We're excited to hear about your vision. Whether you have a detailed plan or just want to
                start a conversation, we're ready to listen. Please fill out the form below or reach out
                through one of your favorite channels.
            </p>
        </div>
    </section>

    {{-- Main Contact Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <x-card class="animate-fade-in-up">
                    <x-slot name="header">
                        <h3 class="text-2xl font-heading font-bold text-foreground">
                            Discuss Your Project
                        </h3>
                    </x-slot>

                    <x-slot name="content" class="pt-6">
                        <form wire:submit="submit" class="space-y-6">
                            {{-- Notifikasi Sukses --}}
                            @if (session('success'))
                                <div class="bg-primary/10 border-l-4 border-primary text-primary p-4 rounded-md"
                                    role="alert">
                                    <p class="font-bold">Pesan Terkirim!</p>
                                    <p>{{ session('success') }}</p>
                                </div>
                            @endif

                            {{-- Baris 1: Nama & Email --}}
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="fullName" class="block text-sm font-medium text-foreground mb-2">Nama
                                        Lengkap *</label>
                                    <input wire:model.blur="fullName" id="fullName" type="text"
                                        placeholder="Nama lengkap Anda"
                                        class="w-full bg-input rounded-md border-border focus:ring-primary focus:border-primary">
                                    @error('fullName')
                                        <span class="text-sm text-destructive mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-foreground mb-2">Alamat
                                        Email *</label>
                                    <input wire:model.blur="email" id="email" type="email"
                                        placeholder="email@anda.com"
                                        class="w-full bg-input rounded-md border-border focus:ring-primary focus:border-primary">
                                    @error('email')
                                        <span class="text-sm text-destructive mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Baris 2: WhatsApp & Nama Bisnis --}}
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="whatsapp" class="block text-sm font-medium text-foreground mb-2">Nomor
                                        WhatsApp (Opsional)</label>
                                    <input wire:model.blur="whatsapp" id="whatsapp" type="text"
                                        placeholder="Contoh: 081234567890"
                                        class="w-full bg-input rounded-md border-border focus:ring-primary focus:border-primary">
                                    @error('whatsapp')
                                        <span class="text-sm text-destructive mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="businessName"
                                        class="block text-sm font-medium text-foreground mb-2">Nama Bisnis
                                        (Opsional)</label>
                                    <input wire:model.blur="businessName" id="businessName" type="text"
                                        placeholder="Nama perusahaan atau brand Anda"
                                        class="w-full bg-input rounded-md border-border focus:ring-primary focus:border-primary">
                                    @error('businessName')
                                        <span class="text-sm text-destructive mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Baris 3: Pilihan Layanan & Budget --}}
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="service" class="block text-sm font-medium text-foreground mb-2">Layanan
                                        yang Dibutuhkan</label>
                                    <select wire:model.blur="service" id="service"
                                        class="w-full bg-input rounded-md border-border focus:ring-primary focus:border-primary">
                                        <option value="">Pilih layanan...</option>
                                        @foreach ($services as $serviceOption)
                                            <option value="{{ $serviceOption }}">{{ $serviceOption }}</option>
                                        @endforeach
                                    </select>
                                    @error('service')
                                        <span class="text-sm text-destructive mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="budget"
                                        class="block text-sm font-medium text-foreground mb-2">Estimasi Budget</label>
                                    <select wire:model.blur="budget" id="budget"
                                        class="w-full bg-input rounded-md border-border focus:ring-primary focus:border-primary">
                                        <option value="">Pilih rentang budget...</option>
                                        @foreach ($budgetRanges as $budgetOption)
                                            <option value="{{ $budgetOption }}">{{ $budgetOption }}</option>
                                        @endforeach
                                    </select>
                                    @error('budget')
                                        <span class="text-sm text-destructive mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Baris 4: Pesan --}}
                            <div>
                                <label for="message" class="block text-sm font-medium text-foreground mb-2">Pesan Anda
                                    *</label>
                                <textarea wire:model.blur="message" id="message" rows="5"
                                    placeholder="Ceritakan tentang proyek Anda, tujuan yang ingin dicapai, dan detail lainnya yang relevan."
                                    class="w-full bg-input rounded-md border-border focus:ring-primary focus:border-primary"></textarea>
                                @error('message')
                                    <span class="text-sm text-destructive mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Tombol Submit --}}
                            <x-button type="submit" variant="hero" size="lg" class="w-full">
                                <div wire:loading.remove wire:target="submit">
                                    <span>Kirim Pesan & Mulai Diskusi</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="inline-block ml-2 h-5 w-5">
                                        <path d="M22 2 11 13 2 9l-2 9 9-2 9-9-2-9-9 2z" />
                                        <path d="m22 2-7 20-4-9-9-4 20-7z" />
                                    </svg>
                                </div>

                                <div wire:loading wire:target="submit">
                                    <span>Mengirim...</span>
                                </div>
                            </x-button>
                        </form>
                    </x-slot>
                </x-card>

                {{-- Contact Information --}}
                <div class="animate-fade-in-up" style="animation-delay: 200ms;">
                    {{-- Other Channels Card --}}
                    <x-card class="mb-8">
                        <x-slot name="header">
                            <h3 class="text-2xl font-heading font-bold text-foreground">Other Channels</h3>
                        </x-slot>
                        <x-slot name="content" class="pt-6 space-y-6">
                            @foreach ($contactMethods as $method)
                                <div class="flex items-center group">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-primary/10 rounded-lg mr-4 group-hover:bg-primary/20 transition-colors">
                                        {{-- SVG Icons --}}
                                        @if ($method['icon'] === 'mail')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-6 h-6 text-primary">
                                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                            </svg>
                                        @elseif($method['icon'] === 'message-circle')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-6 h-6 text-primary">
                                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                            </svg>
                                        @elseif($method['icon'] === 'phone')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-6 h-6 text-primary">
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                            </svg>
                                        @elseif($method['icon'] === 'map-pin')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-6 h-6 text-primary">
                                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                                <circle cx="12" cy="10" r="3" />
                                            </svg>
                                        @endif
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-foreground">{{ $method['title'] }}</h3>
                                        @if ($method['link'] === '#')
                                            <span class="text-muted-foreground">{{ $method['value'] }}</span>
                                        @else
                                            <a href="{{ $method['link'] }}" target="_blank"
                                                rel="noopener noreferrer"
                                                class="text-primary hover:text-primary/80 transition-colors">
                                                {{ $method['value'] }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </x-slot>
                    </x-card>

                    {{-- Business Hours Card --}}
                    <x-card>
                        <x-slot name="header">
                            <div class="flex items-center">
                                {{-- Ikon Jam (Clock) --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary mr-3">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                                <h3 class="text-2xl font-heading font-bold text-foreground">
                                    Business Hours
                                </h3>
                            </div>
                        </x-slot>
                        <x-slot name="content" class="pt-6">
                            <div class="space-y-4 text-muted-foreground">
                                <div class="flex justify-between">
                                    <span class="font-medium text-foreground">Monday - Friday</span>
                                    <span>09:00 - 17:00 WIB</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium text-foreground">Saturday</span>
                                    <span>10:00 - 14:00 WIB</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium text-foreground">Sunday & Public Holidays</span>
                                    <span>Closed</span>
                                </div>
                            </div>
                            <p class="mt-6 text-xs text-muted-foreground/80">
                                Messages sent outside of business hours will be replied to on the next business day.
                            </p>
                        </x-slot>
                    </x-card>
                </div>
            </div>
        </div>
    </section>

    {{-- What Happens Next Section --}}
    <section class="py-20 bg-card">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    What Happens <span class="text-gradient">Next</span>?
                </h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    After you send a message, here’s our commitment to you. We believe in a transparent and
                    responsive process from the very first contact.
                </p>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="space-y-8">
                    @foreach ($nextSteps as $step)
                        <div class="flex items-start animate-fade-in-up"
                            style="animation-delay: {{ $loop->index * 100 }}ms">
                            {{-- Step Number & Icon --}}
                            <div class="flex-shrink-0 flex flex-col items-center mr-6">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-xl">
                                    {{ $step['step'] }}
                                </div>
                                @if (!$loop->last)
                                    <div class="w-px h-16 bg-border mt-4"></div>
                                @endif
                            </div>

                            {{-- Step Content --}}
                            <div class="pt-2">
                                <h3 class="text-xl font-heading font-semibold text-foreground mb-2">
                                    {{ $step['title'] }}
                                </h3>
                                <p class="text-muted-foreground leading-relaxed">
                                    {{ $step['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Location Map Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-foreground mb-6">
                    Our <span class="text-gradient">Location</span>
                </h2>
                <p class="text-xl text-muted-foreground">
                    Based in Surabaya, serving clients across Indonesia and beyond.
                </p>
            </div>

            <div class="max-w-4xl mx-auto animate-fade-in-up" style="animation-delay: 200ms;">
                <x-card>
                    <x-slot name="content" class="pt-6">
                        <div class="aspect-video bg-muted rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                {{-- Ikon MapPin --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="w-16 h-16 text-primary mx-auto mb-4">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <h3 class="text-xl font-heading font-semibold text-foreground mb-2">
                                    Surabaya, Indonesia
                                </h3>
                                <p class="text-muted-foreground">
                                    Interactive map coming soon
                                </p>
                            </div>
                        </div>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </section>
</div>
