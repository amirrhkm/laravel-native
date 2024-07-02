<x-layout>
    <x-slot:heading>Product</x-slot:heading>
    
    <h2 class="font-bold text-lg">{{ $product['name'] }} ({{ $product->brand->name }})</h2>
    <p>This product has the average price of RM {{ $product['price']}}</p>
</x-layout>