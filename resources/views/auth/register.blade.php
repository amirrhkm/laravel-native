<x-layout>
    <x-slot:heading>Register an account</x-slot:heading>
    
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Welcome to PalataoTech Store</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Fill out all the required fields to register an account.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="name">Username</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="name" id="name" placeholder="John Doe" required />
                            <x-form-error name="name"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" placeholder="johndoe@example.com" required />
                            <x-form-error name="email"></x-form-error>
                        </div>
                    </x-form-field>
                
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" placeholder="********" required />
                            <x-form-error name="password"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="********" required />
                            <x-form-error name="password_confirmation"></x-form-error>
                        </div>
                    </x-form-field>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Register</x-form-button>
            </div>
        </div>
    </form>

</x-layout>