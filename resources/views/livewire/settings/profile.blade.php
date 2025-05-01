<section class="w-full bg-gray-500 rounded-3xl p-8">
    @include("partials.settings-heading")

    <x-settings.layout
        :heading="__('Profile')"
        :subheading="__('Update your name and email address')"
    >
        <div class="flex">
            <div class="mx-auto w-full text-center">
                <div class="relative w-full">
                    <img
                        class="w-auto h-auto rounded-3xl absolute"
                        src="https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt=""
                    />
                    <div
                        class="w-auto h-auto group hover:bg-gray-200 opacity-60 rounded-3xl absolute flex justify-center items-center cursor-pointer transition duration-500"
                    >
                        <img
                            class="hidden group-hover:block w-12"
                            src="https://www.svgrepo.com/show/33565/upload.svg"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <form
                wire:submit="updateProfileInformation"
                class="my-6 w-full space-y-6"
            >
                <flux:input
                    wire:model="name"
                    :label="__('Name')"
                    type="text"
                    required
                    autofocus
                    autocomplete="name"
                />

                <div>
                    <flux:input
                        wire:model="email"
                        :label="__('Email')"
                        type="email"
                        required
                        autocomplete="email"
                    />

                    @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                        <div>
                            <flux:text class="mt-4">
                                {{ __("Your email address is unverified.") }}

                                <flux:link
                                    class="text-sm cursor-pointer"
                                    wire:click.prevent="resendVerificationNotification"
                                >
                                    {{ __("Click here to re-send the verification email.") }}
                                </flux:link>
                            </flux:text>

                            @if (session("status") === "verification-link-sent")
                                <flux:text
                                    class="mt-2 font-medium !dark:text-green-400 !text-green-600"
                                >
                                    {{ __("A new verification link has been sent to your email address.") }}
                                </flux:text>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex items-center justify-end">
                        <flux:button
                            variant="primary"
                            type="submit"
                            class="w-full"
                        >
                            {{ __("Save") }}
                        </flux:button>
                    </div>

                    <x-action-message class="me-3" on="profile-updated">
                        {{ __("Saved.") }}
                    </x-action-message>
                </div>
            </form>
        </div>
    </x-settings.layout>
</section>
