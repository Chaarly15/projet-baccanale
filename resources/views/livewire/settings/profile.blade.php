<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6 max-w-lg mx-auto">
            <form wire:submit.prevent="updateProfileInformation" class="space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-user text-blue-600 text-lg"></i>
                        <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus autocomplete="name" class="flex-1" />
                    </div>

                    <div class="space-y-2">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-600 text-lg"></i>
                            <flux:input wire:model="email" :label="__('Email')" type="email" required autocomplete="email" class="flex-1" />
                        </div>

                        @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                            <div class="bg-yellow-50 border border-yellow-200 rounded-md p-4 mt-4">
                                <div class="flex items-center">
                                    <i class="fas fa-exclamation-triangle text-yellow-600 mr-2"></i>
                                    <flux:text class="text-yellow-800">
                                        {{ __('Your email address is unverified.') }}

                                        <flux:link class="text-sm text-yellow-700 underline hover:text-yellow-800 cursor-pointer ml-2" wire:click.prevent="resendVerificationNotification">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </flux:link>
                                    </flux:text>
                                </div>

                                @if (session('status') === 'verification-link-sent')
                                    <flux:text class="mt-2 font-medium text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </flux:text>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                    <a href="{{ route('admin.profile') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Retour au profil
                    </a>

                    <div class="flex items-center space-x-4">
                        <flux:button variant="primary" type="submit" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-colors">
                            <i class="fas fa-save mr-2"></i>
                            {{ __('Save') }}
                        </flux:button>

                        <x-action-message class="text-green-600" on="profile-updated">
                            <i class="fas fa-check-circle mr-1"></i>
                            {{ __('Saved.') }}
                        </x-action-message>
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-8">
            <livewire:settings.delete-user-form />
        </div>
    </x-settings.layout>
</section>
