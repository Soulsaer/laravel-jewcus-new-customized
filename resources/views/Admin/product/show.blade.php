@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Product Details</h1>

    <div class="bg-white p-6 border border-gray-200 rounded-md shadow-md">
        <!-- Product Name -->
        <p><strong class="font-semibold">Name:</strong> {{ $product->name }}</p>
        
        <!-- Product Image -->
        <p>
            <strong class="font-semibold">Image:</strong>
            @if ($product->image)
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="mt-2 max-w-full h-auto rounded-md shadow-sm" width="200">
            @else
                No Image Available
            @endif
        </p>
        
        <!-- Product Description -->
        <p><strong class="font-semibold">Description:</strong> {{ $product->description }}</p>
        
        <!-- Product Meta Title -->
        <p><strong class="font-semibold">Meta Title:</strong> {{ $product->meta_title }}</p>
        
        <!-- Product Meta Description -->
        <p><strong class="font-semibold">Meta Description:</strong> {{ $product->meta_description }}</p>
        
        <!-- Product Meta Keywords -->
        <p><strong class="font-semibold">Meta Keywords:</strong> {{ $product->meta_keyword }}</p>

        <!-- Product URL Key -->
        <p><strong class="font-semibold">URL Key:</strong> {{ $product->url_key }}</p>

        <!-- Product SKU -->
        <p><strong class="font-semibold">SKU:</strong> {{ $product->product_sku }}</p>
        
        <!-- Product Quantity -->
        <p><strong class="font-semibold">Quantity:</strong> {{ $product->quantity }}</p>
        
        <!-- Product Weight -->
        <p><strong class="font-semibold">Weight (in grams):</strong> {{ $product->product_weight }}</p>
        
        <!-- Product Price in India -->
        <p><strong class="font-semibold">Price in India:</strong> {{ $product->price_in_india }}</p>
        
        <!-- Product Price in US -->
        <p><strong class="font-semibold">Price in US:</strong> {{ $product->price_in_us }}</p>
        
        <!-- Product Special Price in India -->
        <p><strong class="font-semibold">Special Price in India:</strong> {{ $product->special_price_india }}</p>
        
        <!-- Product Special Price in US -->
        <p><strong class="font-semibold">Special Price in US:</strong> {{ $product->special_price_us }}</p>
        
        <!-- Product Metal -->
        <p><strong class="font-semibold">Metal:</strong> {{ $product->metal ? $product->metal->name : 'None' }}</p>
        
        <!-- Product Gemstone -->
        <p><strong class="font-semibold">Gemstone:</strong> {{ $product->gemstone ? $product->gemstone->name : 'None' }}</p>
        
        <!-- Product Setting -->
        <p><strong class="font-semibold">Setting:</strong> {{ $product->setting }}</p>
        
        <!-- Product Stone Shape -->
        <p><strong class="font-semibold">Stone Shape:</strong> {{ $product->stone_shape }}</p>

        <!-- Product Stock Status -->
        <p><strong class="font-semibold">Stock Status:</strong> {{ $product->stock_status ? 'In Stock' : 'Out of Stock' }}</p>
        
        <!-- Product Status -->
        <p><strong class="font-semibold">Status:</strong> {{ $product->status ? 'Active' : 'Inactive' }}</p>

        <!-- Category -->
        <p><strong class="font-semibold">Category:</strong> {{ $product->category ? $product->category->name : 'None' }}</p>

        <!-- Created At -->
        <p><strong class="font-semibold">Created At:</strong> {{ $product->created_at->format('d M Y, H:i') }}</p>
        
        <!-- Updated At -->
        <p><strong class="font-semibold">Updated At:</strong> {{ $product->updated_at->format('d M Y, H:i') }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.product.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded ml-2 hover:bg-blue-600">Back to Products</a>
    </div>
</div>
@endsection
