@props([
    'type' => 'single', // 'single' atau 'multiple'
    'collapsible' => false,
])

<div x-data="{
    type: '{{ $type }}',
    collapsible: {{ $collapsible ? 'true' : 'false' }},
    activeAccordion: null,
    setActiveAccordion(id) {
        if (this.type === 'single') {
            this.activeAccordion = (this.collapsible && this.activeAccordion === id) ? null : id;
        } else {
            // Logika untuk tipe 'multiple' bisa ditambahkan di sini jika perlu
        }
    }
}" {{ $attributes->merge(['class' => 'w-full']) }}>
    {{ $slot }}
</div>
