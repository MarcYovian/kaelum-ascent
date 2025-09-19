<h3 class="flex">
    <button type="button" @click="setActiveAccordion(id)" :aria-expanded="isOpen" :aria-controls="`content-${id}`"
        {{ $attributes->merge(['class' => 'flex flex-1 items-center justify-between py-4 font-medium transition-all hover:underline']) }}>
        {{ $slot }}
        {{-- Ikon ChevronDown --}}
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="h-4 w-4 shrink-0 transition-transform duration-200" :class="{ 'rotate-180': isOpen }">
            <path d="m6 9 6 6 6-6" />
        </svg>
    </button>
</h3>
