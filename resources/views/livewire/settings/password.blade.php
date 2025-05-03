<section class="w-full border border-white rounded-3xl p-8">
    @include("partials.settings-heading")

    <x-settings.layout>
        <div class="flex justify-between items-center w-full mb-6">
            <div class="flex flex-col">
                <span class="capitalize text-lg font-medium">Password</span>
                <span class="text-gray-400 text-sm lowercase">
                    Change your password
                </span>
            </div>
            <a href="{{ route("password.request") }}" class="capitalize">
                Forgot password?
            </a>
        </div>
        <form wire:submit="updatePassword" class="space-y-6 md:max-w-lg">
            <flux:input
                wire:model="current_password"
                :label="__('Current password')"
                type="password"
                required
                autocomplete="current-password"
            />
            <flux:input
                wire:model="password"
                :label="__('New password')"
                type="password"
                required
                autocomplete="new-password"
            />
            <flux:input
                wire:model="password_confirmation"
                :label="__('Confirm Password')"
                type="password"
                required
                autocomplete="new-password"
            />

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">
                        {{ __("Save") }}
                    </flux:button>
                </div>

                <x-action-message class="me-3" on="password-updated">
                    {{ __("Saved.") }}
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section>
