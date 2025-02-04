<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaron la contraseña? No te preocupes. Solo ingresa la dirección de correo electrónico y recibirán un enlace para restablecerla.') }}
    </div>

    <!-- Estado de la sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Dirección de correo electrónico -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" class="mb-3"/>    
            <x-text-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:verde-oscuro focus:border-verde-oscuro block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:verde-oscuro dark:focus:verde-oscuro" placeholder="Ingresa la dirección de correo electrónico." type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar enlace') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
