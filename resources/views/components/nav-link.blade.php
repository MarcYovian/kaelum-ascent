@props(['active' => false, 'href' => '#'])

@php
    // Menentukan apakah link aktif berdasarkan URL saat ini
    $isActive = request()->is(ltrim($href, '/'));

    $baseClasses = 'text-sm font-medium transition-colors duration-300 hover:text-primary';
    $activeClasses = 'text-primary';
    $inactiveClasses = 'text-muted-foreground';

    // Menggabungkan class berdasarkan status aktif
    $classes = $isActive ? $baseClasses . ' ' . $activeClasses : $baseClasses . ' ' . $inactiveClasses;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
