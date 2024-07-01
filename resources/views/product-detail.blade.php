<x-layout>
    <x-slot:heading>Product</x-slot:heading>
    
    <h2 class="font-bold text-lg">{{ $product['name']}}</h2>
    <p>This product has the average price of {{ $product['price']}}</p>
</x-layout>