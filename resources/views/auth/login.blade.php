<x-layout>
    <x-slot:heading>Login to an account</x-slot:heading>
    
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Welcome to PalataoTech Store</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Start exploring with the world of tech!</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" placeholder="johndoe@example.com" required />
                            <x-form-error name='email'></x-form-error>
                        </div>
                    </x-form-field>
                
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" placeholder="********" required />
                            <x-form-error name='password'></x-form-error>
                        </div>
                    </x-form-field>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Login</x-form-button>
            </div>
        </div>
    </form>

</x-layout>