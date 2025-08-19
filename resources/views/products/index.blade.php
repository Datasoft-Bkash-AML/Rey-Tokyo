@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">All Products</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="border rounded-lg p-4 shadow">
                <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-600">Category: {{ $product->category->name ?? 'N/A' }}</p>
                <p class="text-gray-800 font-bold mt-2">${{ number_format($product->price, 2) }} {{ $product->currency }}</p>
                <p class="text-sm text-gray-500 mt-2">{{ $product->description }}</p>
                <span class="inline-block mt-2 px-2 py-1 text-xs rounded bg-green-100 text-green-800" v-if="$product->is_new">New</span>
                <span class="inline-block mt-2 px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-800" v-if="$product->is_featured">Featured</span>
            </div>
        @endforeach
    </div>
</div>
@endsection
