<x-layout>
    <x-slot:heading>
        Edit Product: {{ $product->name }}
    </x-slot:heading>

    <form method="POST" action="/product/{{ $product->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Product name</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                                placeholder="Deathadder V3 Pro"
                                value="{{ $product->name }}" 
                                required>
                            </div>
                            @error('name')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Product price</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input
                                type="text"
                                name="price"
                                id="price"
                                class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                placeholder="RM 235.85"
                                value="{{ $product->price }}"
                                required>
                            </div>
                            @error('price')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <div class="flex items-center">
                    <button
                        type="submit"
                        form="delete-form"
                        class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete
                    </button>
                </div>

                <div class="flex items-center gap-x-6">
                    <a href="/product/{{$product->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <div>
                        <button
                            type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </form>

    <form method="POST" class="hidden" action="/product/{{ $product->id }}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>