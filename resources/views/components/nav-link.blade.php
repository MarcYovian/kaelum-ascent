@props(['active'])

@php
    $baseClasses = 'text-sm font-medium transition-colors duration-300 hover:text-primary';
    $activeClasses = 'text-primary';
    $inactiveClasses = 'text-muted-foreground';

    $classes = $active ?? false ? $baseClasses . ' ' . $activeClasses : $baseClasses . ' ' . $inactiveClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
