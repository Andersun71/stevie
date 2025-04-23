<x-layouts.app :title="__('Products')">
    <div class="flex h-auto w-auto flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3 max-lg:grid-cols-1">
            <livewire:product-card />
            <livewire:product-card />
            <livewire:product-card />
            <livewire:product-card />
        </div>
    </div>
</x-layouts.app>
