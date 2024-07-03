<x-layout>
    <x-slot:heading>Add Product</x-slot:heading>
    
    <form method="POST" action="/product">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new listing for your product.</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Complete product details to display for customer.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="name">Product name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="name" id="name" placeholder="Deathadder V3 Pro" required />
                            <x-form-error name='name'></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="price">Product price</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="price" id="price" placeholder="RM 235.85" required />
                            <x-form-error name='price'></x-form-error>
                        </div>
                    </x-form-field>
                
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/product" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Save</x-form-button>
            </div>
        </div>
    </form>

</x-layout>