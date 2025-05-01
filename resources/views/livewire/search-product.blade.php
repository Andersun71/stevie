<div>
    <flux:tooltip
        :content="__('Search')"
        position="bottom"
        class="flex flex-row-reverse items-center gap-2"
    >
        <flux:navbar.item
            class="!h-10 [&>div>svg]:size-5 justify-end"
            icon="magnifying-glass"
            href="#"
            :label="__('Search')"
        />

        <flux:input
            size="sm"
            placeholder="Search..."
            wire:model.live="search"
        />
    </flux:tooltip>
</div>
