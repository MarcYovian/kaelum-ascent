{{-- File: resources/views/components/card.blade.php --}}

@props([
    'header' => null,
    'title' => null,
    'description' => null,
    'content' => null,
    'footer' => null,
])

<div {{ $attributes->merge(['class' => 'rounded-lg border bg-card text-card-foreground shadow-sm flex flex-col']) }}>
    {{-- Bagian Header --}}
    @if ($header || $title || $description)
        <div {{ $header?->attributes->merge(['class' => 'flex flex-col space-y-1.5 p-6']) }}>
            @if ($header)
                {{ $header }}
            @else
                @if ($title)
                    <h3
                        {{ $title->attributes->merge(['class' => 'text-2xl font-semibold leading-none tracking-tight']) }}>
                        {{ $title }}
                    </h3>
                @endif
                @if ($description)
                    <p {{ $description->attributes->merge(['class' => 'text-sm text-muted-foreground']) }}>
                        {{ $description }}
                    </p>
                @endif
            @endif
        </div>
    @endif

    {{-- Bagian Konten --}}
    <div {{ $content?->attributes->merge(['class' => 'p-6 pt-0 flex-grow']) }}>
        {{ $content ?? $slot }}
    </div>

    {{-- Bagian Footer --}}
    @if ($footer)
        <div {{ $footer->attributes->merge(['class' => 'flex items-center p-6 pt-0']) }}>
            {{ $footer }}
        </div>
    @endif
</div>
