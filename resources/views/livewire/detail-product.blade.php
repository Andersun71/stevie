
<div class="grid grid-cols-2 max-lg:grid-cols-1 max-lg:mx-2 gap-4 h-full">
    <div class="flex flex-col gap-4">
        <div class="w-full h-auto overflow-hidden">
            <img
                src="{{ $product->images ?? "#" }}"
                alt="{{ $product->title ?? "Product image" }}"
                class="w-full min-h-96 max-h-96 object-cover rounded-2xl"
            />
        </div>
        <div
            class="flex mt-2 max-lg:mx-2 flex-col items-center justify-center gap-2 w-full"
        >
            <!-- rating -->
            <div class="flex items-center gap-4">
                <span class="text-2xl">3.0</span>

                <flux:separator vertical class="mx-2" />

                <div class="flex flex-col items-center gap-1">
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <span>based on 99 review</span>
                </div>
            </div>

            <!-- review modal -->
            <div class="w-full mt-2">
                <flux:modal.trigger name="show-review">
                    <flux:button class="w-full">Review</flux:button>
                </flux:modal.trigger>

                <flux:modal name="show-review" class="w-full">
                    <div class="space-y-6">
                        <div>
                            <flux:heading size="lg">Reviews</flux:heading>

                            <!-- Alpine.js untuk Rating -->
                            <div x-data="{ rating: 0 }" class="flex items-center space-x-1 text-3xl text-yellow-500">
                                <template x-for="i in 5">
                                    <span
                                        @click="rating = i"
                                        class="material-symbols-outlined cursor-pointer"
                                        :style="`font-variation-settings: 'FILL' ${i <= rating ? 1 : 0}, 'wght' 400`"
                                    >
                                        star
                                    </span>
                                </template>

                                <!-- Input Rating Tersembunyi untuk Livewire -->
                                <input type="hidden" wire:model="rating" :value="rating">
                            </div>

                            <!-- Input Comment dengan Wire -->
                            <flux:input
                                wire:model="review"
                                :label="__('Comment')"
                                type="text"
                                required
                                autofocus
                                autocomplete="review"
                            />
                        </div>

                        <!-- Tombol Kirim -->
                        <flux:button
                            variant="primary"
                            type="submit"
                            class="w-full"
                        >
                            {{ __("Send") }}
                        </flux:button>
                    </div>
                </flux:modal>
            </div>

            <!-- batas -->
        </div>
    </div>
    <div class="flex flex-col gap-4 mx-10 max-lg:mx-2">
        <!-- product -->
        <div class="flex flex-col">
            <span class="font-bold text-4xl capitalize">
                {{ $product->title ?? "Untitled Product" }}
            </span>
            <span class="font-bold text-2xl">
                Rp{{ $product->base_price ?? "0" }}
            </span>
        </div>

        <div class="flex">
            <!-- sold count -->
            <div class="flex items-center gap-2">
                <span class="capitalize">sold</span>
                <span>3</span>
            </div>

            <flux:separator vertical class="mx-2" />

            <!-- rating -->
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined ml-2">star_half</span>
                <span>4.5</span>
            </div>

            <flux:separator vertical class="mx-2" />

            <!-- review -->
            <div class="flex items-center gap-2">
                <span class="capitalize">review</span>
                <span>99</span>
            </div>
        </div>

        <div class="flex gap-2">
            <div class="py-1 px-2 bg-gray-200 rounded">
                <flux:heading class="lowercase text-black">
                    {{ $product->type ?? "Unknown" }}
                </flux:heading>
            </div>
            @foreach ($categories as $category)
                <div class="py-1 px-2 bg-gray-200 rounded">
                    <flux:heading class="lowercase text-black">
                        {{ $category->name ?? "Not Loaded" }}
                    </flux:heading>
                </div>
            @endforeach
        </div>

        <!-- description -->
        <div class="flex flex-col gap-2">
            <flux:heading class="capitalize">description</flux:heading>
            <flux:text>
                {{ $product->description ?? "No description available" }}
            </flux:text>
        </div>

        <!-- chat button -->
        <flux:button variant="primary" class="w-full capitalize">
            chat now
        </flux:button>
    </div>
</div>

