<x-layout>
    <x-slot:heading>Product Page</x-slot:heading>
    
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="/product/{{ $product['id']}}">
                    <strong> {{ $product['name'] }}: </strong> costs {{ $product['price'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>