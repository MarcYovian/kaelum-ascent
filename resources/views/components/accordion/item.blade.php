@props(['value'])

<div x-data="{
    id: '{{ $value }}',
    isOpen: false,
    init() {
        this.$watch('activeAccordion', value => this.isOpen = (value === this.id));
    }
}" class="border-b">
    {{ $slot }}
</div>
