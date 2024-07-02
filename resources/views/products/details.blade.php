<x-layout>
    <x-slot:heading>Product details</x-slot:heading>
    
    <h2 class="font-bold text-lg">{{ $product->name }} ({{ $product->brand->name }})</h2>
    <p>This product has the average price of RM {{ $product->price }}</p>

    <p class="mt-10">
        <x-button href="/product/{{ $product->id }}/edit">Edit Product</x-button>
    </p>    
</x-layout>