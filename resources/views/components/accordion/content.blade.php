<div x-show="isOpen" x-transition:enter="ease-out transition-all" x-transition:enter-start="opacity-0 max-h-0"
    x-transition:enter-end="opacity-100 max-h-screen" x-transition:leave="ease-in transition-all"
    x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
    class="overflow-hidden text-sm" :id="`content-${id}`">
    <div {{ $attributes->merge(['class' => 'pb-4 pt-0']) }}>
        {{ $slot }}
    </div>
</div>
