<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex">
                <div class="mr-2">
                    <x-label for="name" value="{{ __('First Name') }}" />
                    <x-input id="name" class="w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="name" />
                </div>
                <div class="ml-2">
                    <x-label for="name" value="{{ __('Last Name') }}" />
                    <x-input id="name" class="w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="name" />
                </div>
            </div>
            

            <div class="mt-4">
                <x-label value="{{ __('Gender') }}" />
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="gender" value="man" checked>
                        <span class="ml-2">Man</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="gender" value="woman">
                        <span class="ml-2">Woman</span>
                    </label>
                </div>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="tel" value="{{ __('Tel') }}" />
                <x-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autocomplete="username" />
            </div>


            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label value="{{ __('Role') }}" />
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="usertype" value="student" checked>
                        <span class="ml-2">Student</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="usertype" value="admin">
                        <span class="ml-2">Admin</span>
                    </label>
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
