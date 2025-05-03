<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    @if ($products->count() > 0)
        <div class="grid auto-rows-min gap-4 md:grid-cols-3 max-lg:grid-cols-1">
            @foreach ($products as $product)
                <a href="{{ url("product/" . $product->id) }}" class="block">
                    <div
                        class="relative rounded-3xl border border-neutral-200 dark:border-neutral-700 h-full"
                    >
                        <div
                            class="h-full w-auto mx-auto rounded-3xl overflow-hidden shadow-md bg-white dark:bg-neutral-900"
                        >
                            <div class="flex flex-col p-4 gap-2 h-full">
                                <div class="w-full h-48 overflow-hidden">
                                    <img
                                        src="{{ $product->images ?? "#" }}"
                                        alt="{{ $product->title ?? "Product image" }}"
                                        class="w-full h-48 object-cover rounded-2xl"
                                    />
                                </div>
                                <div
                                    class="items-end flex justify-between mt-2"
                                >
                                    <div
                                        class="text-xl font-bold truncate mr-2"
                                    >
                                        <span>
                                            {{ $product->title ?? "Untitled Product" }}
                                        </span>
                                    </div>
                                    <div class="text-sm whitespace-nowrap">
                                        <span class="capitalize">
                                            Posted by:
                                        </span>
                                        <span>
                                            {{ $product->user->name ?? "Unknown" }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow">
                                    <p
                                        class="text-gray-600 dark:text-gray-300 text-sm line-clamp-2"
                                    >
                                        {{ $product->description ?? "No description available" }}
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <h2 class="font-semibold">
                                        Start from
                                        Rp{{ $product->base_price ?? "0" }}
                                    </h2>
                                </div>
                                <div
                                    class="flex justify-between items-center mt-2"
                                >
                                    <span
                                        class="px-2 py-1 bg-blue-100 text-black text-xs rounded"
                                    >
                                        Type: {{ $product->type ?? "Unknown" }}
                                    </span>
                                    <div class="flex justify-end items-center">
                                        <span>3 Sold / 4.5</span>
                                        <span
                                            class="material-symbols-outlined ml-2"
                                        >
                                            star_half
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    @else
        <!-- No Results Found -->
        <div
            class="flex flex-col items-center justify-center py-16 text-center"
        >
            <flux:icon
                name="magnifying-glass"
                class="h-16 w-16 text-gray-400"
            />
            <h2 class="mt-4 text-xl font-medium">No products found</h2>
            @if (! empty($search))
                <p class="mt-1 text-gray-500">
                    Try adjusting your search term or browse all products
                </p>
                <flux:button wire:click="$set('search', '')" class="mt-4">
                    View All Products
                </flux:button>
            @else
                <p class="mt-1 text-gray-500">
                    There are no {{ $type }} products available at the moment
                </p>
            @endif
        </div>
    @endif
</div>
