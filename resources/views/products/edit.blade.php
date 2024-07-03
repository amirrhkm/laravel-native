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

                    <x-form-field>
                        <x-form-label for="name">Product name</x-form-label>
                        <div class="mt-2">
                            <x-form-input  type="text" name="name" id="name" placeholder="Deathadder V3 Pro" value="{{ $product->name }}" required />
                            <x-form-error name='name'></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="name">Product price</x-form-label>
                        <div class="mt-2">
                            <x-form-input  type="text" name="price" id="price" placeholder="123.45" value="{{ $product->price }}" required />
                            <x-form-error name='name'></x-form-error>
                        </div>
                    </x-form-field>

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
                        <x-form-button>Update</x-form-button>
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