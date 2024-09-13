<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verify.otp') }}">
            @csrf

            <div>
                <x-input-label value="{{ __('OTP CODE') }}"/>

                <x-text-input id="email" class="block mt-1 w-full" type="password" name="otp_code"  />

                @error('otp_code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <x-primary-button>
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
