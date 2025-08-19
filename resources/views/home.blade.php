@extends('layouts.app')

@section('content')
<div class="bg-white">
    <!-- Hero Banner / Slider -->
    <div class="relative bg-gray-900">
        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=1500&q=80" alt="Hero Banner" class="w-full h-96 object-cover opacity-70">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Tokyo Fashion</h1>
            <p class="text-lg md:text-2xl mb-6">Discover the latest in Men, Women & Kids collections</p>
            <a href="#just-in" class="bg-white text-gray-900 px-6 py-3 rounded shadow font-semibold hover:bg-gray-200 transition">Shop New Arrivals</a>
        </div>
    </div>

    <!-- Category Division -->
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="#" class="block group">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80" alt="Men" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <h2 class="text-xl font-bold text-center mt-4">Men</h2>
            </a>
            <a href="#" class="block group">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=600&q=80" alt="Women" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <h2 class="text-xl font-bold text-center mt-4">Women</h2>
            </a>
            <a href="#" class="block group">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=600&q=80" alt="Kids" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <h2 class="text-xl font-bold text-center mt-4">Kids</h2>
            </a>
        </div>
    </div>

    <!-- Just In Section -->
    <div id="just-in" class="bg-gray-100 py-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6 text-center">Just In</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @if(isset($products) && count($products))
                    @foreach($products as $product)
                        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded mb-4">
                            <h3 class="font-semibold text-lg">{{ $product->name }}</h3>
                            <p class="text-gray-600">${{ number_format($product->price, 2) }}</p>
                        </div>
                    @endforeach
                @else
                    <!-- Example product cards fallback -->
                    <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="New Product" class="w-full h-48 object-cover rounded mb-4">
                        <h3 class="font-semibold text-lg">Tokyo Denim Jacket</h3>
                        <p class="text-gray-600">$89.99</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                        <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80" alt="New Product" class="w-full h-48 object-cover rounded mb-4">
                        <h3 class="font-semibold text-lg">Sakura Floral Dress</h3>
                        <p class="text-gray-600">$129.99</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                        <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=400&q=80" alt="New Product" class="w-full h-48 object-cover rounded mb-4">
                        <h3 class="font-semibold text-lg">Kids Rainbow Hoodie</h3>
                        <p class="text-gray-600">$49.99</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Featured Collections -->
    <div class="container mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6 text-center">Featured Collections</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow flex flex-col md:flex-row items-center p-6">
                <img src="https://images.unsplash.com/photo-1469398715555-76331a6c7c9b?auto=format&fit=crop&w=400&q=80" alt="Collection" class="w-full md:w-1/3 h-40 object-cover rounded mb-4 md:mb-0 md:mr-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">Urban Streetwear</h3>
                    <p class="text-gray-600">Explore the latest trends in Tokyo street fashion.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow flex flex-col md:flex-row items-center p-6">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=400&q=80" alt="Collection" class="w-full md:w-1/3 h-40 object-cover rounded mb-4 md:mb-0 md:mr-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">Minimalist Essentials</h3>
                    <p class="text-gray-600">Clean lines and timeless pieces for every wardrobe.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="bg-gray-900 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-white mb-4">Stay in the Loop</h2>
            <p class="text-gray-300 mb-6">Sign up for our newsletter to get the latest updates and offers.</p>
            <form class="flex flex-col md:flex-row justify-center items-center max-w-xl mx-auto">
                <input type="email" placeholder="Enter your email" class="w-full md:w-2/3 px-4 py-2 rounded-l-md focus:outline-none">
                <button type="submit" class="bg-white text-gray-900 px-6 py-2 rounded-r-md font-semibold hover:bg-gray-200 transition">Subscribe</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-6 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Rey Tokyo. All rights reserved.
        </div>
    </footer>
</div>
@endsection
