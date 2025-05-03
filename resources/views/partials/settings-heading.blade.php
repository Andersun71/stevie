<div class="relative mb-6 w-full">
    <div class="flex items-center">
        <a
            href="{{ route("settings.profile") }}"
            wire:navigate
            class="border-b-2 border-transparent hover:border-current pb-2 transition-colors w-full flex items-center justify-center"
        >
            {{ __("Profile") }}
        </a>
        <a
            href="{{ route("settings.password") }}"
            wire:navigate
            class="border-b-2 border-transparent hover:border-current pb-2 transition-colors w-full flex items-center justify-center"
        >
            {{ __("Password") }}
        </a>
        <a
            href="{{ route("settings.review-user") }}"
            wire:navigate
            class="border-b-2 border-transparent hover:border-current pb-2 transition-colors w-full flex items-center justify-center"
        >
            {{ __("Review") }}
        </a>
        <a
            href="{{ route("settings.appearance") }}"
            wire:navigate
            class="border-b-2 border-transparent hover:border-current pb-2 transition-colors w-full flex items-center justify-center"
        >
            {{ __("Appearance") }}
        </a>
        <a
            href="{{ route("settings.delete-user-form") }}"
            wire:navigate
            class="border-b-2 border-transparent hover:border-current pb-2 transition-colors w-full flex items-center justify-center"
        >
            {{ __("Delete Account") }}
        </a>
    </div>
    <flux:separator class="my-0" variant="subtle" />
</div>
