<section class="w-full bg-gray-500 rounded-3xl p-8">
    @include("partials.settings-heading")

    <x-settings.layout
        :heading="__('Profile')"
        :subheading="__('Update your name and email address')"
    >
        <div class="flex gap-8 w-full">
            <div class="flex flex-col gap-6 w-full">
                <!-- Personal -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex flex-col">
                        <span class="capitalize text-gray-400 text-sm">
                            Full Name
                        </span>
                        <span class="font-medium">
                            {{ auth()->user()->name ?? "user" }}
                        </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="capitalize text-gray-400 text-sm">
                            Username
                        </span>
                        <span class="font-medium">
                            {{ auth()->user()->username ?? auth()->user()->name }}
                        </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="capitalize text-gray-400 text-sm">
                            NISN
                        </span>
                        <span class="font-medium">
                            {{ auth()->user()->nisn ?? "-" }}
                        </span>
                    </div>
                </div>

                <flux:separator text="contact detail" />

                <!-- Contact -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <span class="capitalize text-gray-400 text-sm">
                            Email
                        </span>
                        <span class="font-medium">
                            {{ auth()->user()->email ?? "-" }}
                        </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="capitalize text-gray-400 text-sm">
                            Phone Number
                        </span>
                        <span class="font-medium">
                            {{ auth()->user()->phone ?? "-" }}
                        </span>
                    </div>
                </div>

                <flux:separator text="address detail" />

                <!-- Address -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <span class="capitalize text-gray-400 text-sm">
                            School
                        </span>
                        <span class="font-medium">
                            {{ auth()->user()->school ?? "-" }}
                        </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="capitalize text-gray-400 text-sm">
                            Address
                        </span>
                        <span class="font-medium">
                            {{ auth()->user()->address ?? "-" }}
                        </span>
                    </div>
                </div>

                <div class="mt-6">
                    <flux:modal.trigger name="edit-profile">
                        <flux:button>Edit profile</flux:button>
                    </flux:modal.trigger>
                </div>

                <flux:modal name="edit-profile" class="w-auto">
                    <div class="space-y-6">
                        <form
                            wire:submit="updateProfileInformation"
                            class="my-6 w-full space-y-6"
                        >
                            <div class="grid grid-cols-2 gap-4">
                                <flux:input
                                    wire:model="name"
                                    :label="__('Name')"
                                    type="text"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />
                                <flux:input
                                    wire:model="username"
                                    :label="__('Username')"
                                    type="text"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />
                                <flux:input
                                    wire:model="nisn"
                                    :label="__('Nisn')"
                                    type="text"
                                    required
                                    autofocus
                                    autocomplete="nisn"
                                />
                            </div>

                            <flux:separator />

                            <div class="grid grid-cols-2 gap-4">
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

                                <flux:input
                                    wire:model="phone"
                                    :label="__('Phone Number')"
                                    type="tel"
                                    required
                                    autocomplete="phone"
                                />
                            </div>

                            <flux:separator />

                            <div class="grid grid-cols-2 gap-4">
                                <flux:input
                                    wire:model="school"
                                    :label="__('School')"
                                    type="text"
                                    required
                                    autofocus
                                    autocomplete="school"
                                />
                                <flux:input
                                    wire:model="address"
                                    :label="__('Address')"
                                    type="text"
                                    required
                                    autofocus
                                    autocomplete="address"
                                />
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

                                <x-action-message
                                    class="me-3"
                                    on="profile-updated"
                                >
                                    {{ __("Saved.") }}
                                </x-action-message>
                            </div>
                        </form>
                    </div>
                </flux:modal>
            </div>

            <div class="w-full md:w-1/2 flex items-center justify-center p-4">
                <div
                    class="relative w-full h-full max-h-80 rounded-3xl overflow-hidden group"
                >
                    <img
                        class="w-full h-full object-cover rounded-3xl"
                        src="https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Profile picture"
                    />
                    <div
                        class="absolute inset-0 bg-gray-200 opacity-0 group-hover:opacity-60 rounded-3xl flex justify-center items-center cursor-pointer transition duration-500"
                    >
                        <img
                            class="w-12"
                            src="https://www.svgrepo.com/show/33565/upload.svg"
                            alt="Upload icon"
                        />
                    </div>
                </div>
            </div>
        </div>
    </x-settings.layout>
</section>
