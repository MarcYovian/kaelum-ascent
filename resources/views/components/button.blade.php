@props([
    'variant' => 'default',
    'size' => 'default',
    'asChild' => false,
    'href' => null,
])

@php
    $baseClasses =
        'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-lg text-sm font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0';

    $variants = [
        'default' =>
            'bg-primary text-primary-foreground hover:bg-primary/90 shadow-lg hover:shadow-xl hover:-translate-y-1',
        'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' =>
            'border border-primary text-primary hover:bg-primary hover:text-primary-foreground shadow-sm hover:shadow-lg',
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground',
        'link' => 'text-primary underline-offset-4 hover:underline',
        'hero' =>
            'bg-primary text-primary-foreground hover:bg-primary/90 shadow-hero-glow hover:shadow-xl hover:-translate-y-2 animate-pulse-glow text-base font-semibold',
    ];

    $sizes = [
        'default' => 'h-11 px-6 py-3',
        'sm' => 'h-9 rounded-md px-3',
        'lg' => 'h-13 rounded-lg px-8 py-4 text-base',
        'icon' => 'h-10 w-10',
    ];

    // Menggabungkan semua class
    $classes = collect([$baseClasses, $variants[$variant] ?? $variants['default'], $sizes[$size] ?? $sizes['default']])
        ->filter()
        ->implode(' ');

    // Menentukan tag: <a> jika href diberikan, jika tidak <button>
    $tag = $href ? 'a' : 'button';

    // Jika asChild=true, kita hanya akan merender slot
    if ($asChild) {
        $tag = 'slot';
    }
@endphp

@if ($tag !== 'slot')
    <{{ $tag }} {{ $attributes->merge(['class' => $classes, 'href' => $href]) }}>
        {{ $slot }}
    </{{ $tag }}>
@else
    {{ $slot->withAttributes(['class' => $classes]) }}
@endif
