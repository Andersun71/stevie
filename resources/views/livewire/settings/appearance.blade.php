<section class="w-full bg-gray-500 rounded-3xl p-8">
    @include("partials.settings-heading")

    <x-settings.layout>
        <div class="mb-6 flex flex-col">
            <span class="capitalize text-lg font-medium">Appearance</span>
            <span class="text-gray-400 text-sm lowercase">Customize theme</span>
        </div>
        <flux:radio.group
            x-data
            variant="segmented"
            x-model="$flux.appearance"
        >
            <flux:radio value="light" icon="sun">{{ __("Light") }}</flux:radio>
            <flux:radio value="dark" icon="moon">{{ __("Dark") }}</flux:radio>
            <flux:radio value="system" icon="computer-desktop">
                {{ __("System") }}
            </flux:radio>
        </flux:radio.group>
    </x-settings.layout>
</section>
