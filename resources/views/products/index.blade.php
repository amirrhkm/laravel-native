<x-layout>
    <x-slot:heading>Product Listing</x-slot:heading>
    
    <div class="space-y-4">
        @foreach ($products as $product)
            <a href="/product/{{ $product->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500">{{ $product->brand->name }}</div>

                <strong> {{ $product->name }}: </strong> RM {{ $product->price }} per unit
            </a>
        @endforeach
    </div>

    <div class="m-4">
        {{ $products->links() }}
    </div>
</x-layout>