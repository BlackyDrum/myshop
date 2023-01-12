<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Danke fürs Registrieren! Könnten Sie, bevor Sie beginnen, Ihre E-Mail-Adresse bestätigen, indem Sie auf den Link klicken, den wir Ihnen gerade per E-Mail gesendet haben? Sollten Sie die E-Mail nicht erhalten haben, senden wir Ihnen gerne eine weitere zu.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Ein neuer Bestätigungslink wurde an die E-Mail-Adresse gesendet, die Sie bei der Registrierung angegeben haben.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Bestätigungsmail erneut senden') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Ausloggen') }}
            </button>
        </form>
    </div>
</x-guest-layout>
