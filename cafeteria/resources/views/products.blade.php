<x-app-layout>
<div class="container mx-auto p-6">
    <!-- Café -->
    <h2 class="text-xl font-bold mb-4">Café</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($cafeProducts as $product)
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover mb-4">
                <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                <p class="text-gray-600">{{ $product->description }}</p>
                <p class="text-red-500 mt-2">${{ $product->price }}</p>
            </div>
        @endforeach
    </div>
</div>

</x-app-layout>