<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 max-lg:grid-cols-1">
        @foreach ($services as $service)
            <div
                class="relative rounded-3xl border border-neutral-200 dark:border-neutral-700 h-full"
            >
                <div
                    class="h-full w-auto mx-auto rounded-3xl overflow-hidden shadow-md bg-white dark:bg-neutral-900"
                >
                    <div class="flex flex-col p-4 gap-2 h-full">
                        <div class="w-full h-48 overflow-hidden">
                            <img
                                src="{{ $service->images }}"
                                alt="random"
                                class="w-full h-48 object-cover rounded-2xl"
                            />
                        </div>
                        <div class="items-end flex justify-between mt-2">
                            <div class="text-xl font-bold truncate mr-2">
                                <span>{{ $service->title }}</span>
                            </div>
                            <div class="text-sm whitespace-nowrap">
                                <span class="capitalize">Posted by:</span>
                                <span>{{ $service->user->name }}</span>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <p
                                class="text-gray-600 dark:text-gray-300 text-sm line-clamp-2"
                            >
                                {{ $service->description }}
                            </p>
                        </div>
                        <div class="mt-auto">
                            <h2 class="font-semibold">
                                Start form Rp{{ $service->base_price }}
                            </h2>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span
                                class="px-2 py-1 bg-blue-100 text-black text-xs rounded"
                            >
                                Type: {{ $service->type }}
                            </span>
                            <div class="flex justify-end items-center">
                                <span>3 Sold / 4.5</span>
                                <span class="material-symbols-outlined ml-2">
                                    star_half
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
