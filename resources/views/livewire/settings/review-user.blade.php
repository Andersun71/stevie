<section
    class="w-full border border-neutral-200 dark:border-neutral-700 rounded-3xl p-8"
>
    @include("partials.settings-heading")

    <x-settings.layout>
        <div class="flex justify-between items-center">
            <flux:dropdown>
                <flux:button icon:trailing="chevron-down">Options</flux:button>

                <flux:menu>
                    <flux:menu.item icon="plus">New post</flux:menu.item>

                    <flux:menu.separator />

                    <flux:menu.submenu heading="Sort by">
                        <flux:menu.radio.group>
                            <flux:menu.radio checked>Name</flux:menu.radio>
                            <flux:menu.radio>Date</flux:menu.radio>
                            <flux:menu.radio>Popularity</flux:menu.radio>
                        </flux:menu.radio.group>
                    </flux:menu.submenu>

                    <flux:menu.submenu heading="Filter">
                        <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                        <flux:menu.checkbox checked>
                            Published
                        </flux:menu.checkbox>
                        <flux:menu.checkbox>Archived</flux:menu.checkbox>
                    </flux:menu.submenu>

                    <flux:menu.separator />

                    <flux:menu.item variant="danger" icon="trash">
                        Delete
                    </flux:menu.item>
                </flux:menu>
            </flux:dropdown>
            <div>
                <flux:input
                    icon="magnifying-glass"
                    placeholder="Search Reviews"
                />
            </div>
        </div>
        <div
            class="mt-6 border border-gray-500 rounded-2xl p-4 flex justify-between"
        >
            <div class="w-full flex flex-col justify-between">
                <div class="flex flex-col">
                    <span class="font-medium text-2xl">
                        {{ $product->title ?? "Untitled Product" }}
                    </span>
                    <span>{{ auth()->user()->name }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span>2 days ago</span>
                    <flux:separator vertical />
                    <span class="lowercase">Delete</span>
                    <flux:separator vertical />
                    <span class="lowercase">edit</span>
                </div>
            </div>
            <div class="w-full">
                <div class="flex justify-between items-center mb-2">
                    <span>Reviews</span>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <span>4.5</span>
                </div>
                <flux:textarea>
                    {{ $product->description ?? "No description" }}
                </flux:textarea>
            </div>
        </div>
    </x-settings.layout>
</section>
