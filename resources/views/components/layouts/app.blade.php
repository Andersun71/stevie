<x-layouts.app.sidebar :title="$title ?? null">
    @if (isset($headerType) && $headerType === "product")
        <x-layouts.app.product-header />
    @else
        <x-layouts.app.header />
    @endif
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
