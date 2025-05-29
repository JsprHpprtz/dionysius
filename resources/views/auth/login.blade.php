<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex min-h-screen items-center justify-center py-20 px-4">
        <div class="w-full max-w-md">
            <form method="POST" action="{{ route('login') }}" class="bg-base-200 shadow-md rounded-lg p-6" id="loginForm">
                @csrf

                <!-- Form title -->
                <h1 class="text-2xl font-semibold mb-6 text-center">Trainer login</h1>

                <!-- Password -->
                <div class="mt-4">
                    <label class="floating-label">
                        <span>Wachtwoord</span>
                        <input id="password" type="password" placeholder="*************" name="password" class="input input-md block mt-1 w-full" autocomplete="current-password" />
                    </label>
                    <div id="password-error" class="text-error text-sm mt-1 hidden">Wachtwoord is verplicht</div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    
                    @if ($errors->any())
                        <div class="text-error text-sm mt-2">
                            Ongeldige inloggegevens. Probeer het opnieuw.
                        </div>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    
                </div>

                <div class="flex items-center justify-center mt-6">
                    <button type="submit" id="loginButton" class="btn btn-primary w-full justify-center">
                        <span id="buttonText">{{ __('Log in') }}</span>
                        <span id="buttonSpinner" class="loading loading-spinner loading-md hidden"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            const passwordInput = document.getElementById('password');
            const passwordError = document.getElementById('password-error');
            const button = document.getElementById('loginButton');
            const buttonText = document.getElementById('buttonText');
            const buttonSpinner = document.getElementById('buttonSpinner');

            // Validate form before submission
            form.addEventListener('submit', function(event) {
                let isValid = true;
                
                // Check if password is empty
                if (!passwordInput.value.trim()) {
                    passwordError.classList.remove('hidden');
                    passwordInput.classList.add('input-error');
                    isValid = false;
                } else {
                    passwordError.classList.add('hidden');
                    passwordInput.classList.remove('input-error');
                }
                
                if (isValid) {
                    // Disable the button and show spinner
                    button.disabled = true;
                    buttonText.classList.add('hidden');
                    buttonSpinner.classList.remove('hidden');
                } else {
                    // Prevent form submission if validation fails
                    event.preventDefault();
                }
            });
            
            // Hide error message when user starts typing
            passwordInput.addEventListener('input', function() {
                passwordError.classList.add('hidden');
                passwordInput.classList.remove('input-error');
            });
        });
    </script>
</x-guest-layout>
