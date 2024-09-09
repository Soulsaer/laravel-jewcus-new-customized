@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image Field -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @if($product->image)
                <p class="mt-2">Current Image:</p>
                <img src="{{ asset($product->image) }}" alt="Current Image" width="100" class="mt-1 rounded-md border">
            @endif
            @error('image')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Meta Title Field -->
        <div class="mb-4">
            <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
            <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title', $product->meta_title) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('meta_title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Meta Description Field -->
        <div class="mb-4">
            <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
            <textarea id="meta_description" name="meta_description" rows="4" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">{{ old('meta_description', $product->meta_description) }}</textarea>
            @error('meta_description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Other Meta Info Field -->
        <div class="mb-4">
            <label for="other_meta_info" class="block text-sm font-medium text-gray-700">Other Meta Info</label>
            <input type="text" id="other_meta_info" name="other_meta_info" value="{{ old('other_meta_info', $product->other_meta_info) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('other_meta_info')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Product SKU Field -->
        <div class="mb-4">
            <label for="product_sku" class="block text-sm font-medium text-gray-700">Product SKU</label>
            <input type="text" id="product_sku" name="product_sku" value="{{ old('product_sku', $product->product_sku) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('product_sku')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Quantity Field -->
        <div class="mb-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('quantity')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Product Weight Field -->
        <div class="mb-4">
            <label for="product_weight" class="block text-sm font-medium text-gray-700">Product Weight</label>
            <input type="number" step="0.01" id="product_weight" name="product_weight" value="{{ old('product_weight', $product->product_weight) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('product_weight')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Price in India Field -->
        <div class="mb-4">
            <label for="price_in_india" class="block text-sm font-medium text-gray-700">Price in India</label>
            <input type="number" step="0.01" id="price_in_india" name="price_in_india" value="{{ old('price_in_india', $product->price_in_india) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('price_in_india')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Price in US Field -->
        <div class="mb-4">
            <label for="price_in_us" class="block text-sm font-medium text-gray-700">Price in US</label>
            <input type="number" step="0.01" id="price_in_us" name="price_in_us" value="{{ old('price_in_us', $product->price_in_us) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('price_in_us')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Special Price India Field -->
        <div class="mb-4">
            <label for="special_price_india" class="block text-sm font-medium text-gray-700">Special Price India</label>
            <input type="number" step="0.01" id="special_price_india" name="special_price_india" value="{{ old('special_price_india', $product->special_price_india) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('special_price_india')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Special Price US Field -->
        <div class="mb-4">
            <label for="special_price_us" class="block text-sm font-medium text-gray-700">Special Price US</label>
            <input type="number" step="0.01" id="special_price_us" name="special_price_us" value="{{ old('special_price_us', $product->special_price_us) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('special_price_us')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- URL Key Field -->
        <div class="mb-4">
            <label for="url_key" class="block text-sm font-medium text-gray-700">URL Key</label>
            <input type="text" id="url_key" name="url_key" value="{{ old('url_key', $product->url_key) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('url_key')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Metal Field -->
        <div class="mb-4">
            <label for="metal_id" class="block text-sm font-medium text-gray-700">Metal</label>
            <select id="metal_id" name="metal_id" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
                <option value="">Select Metal</option>
                @foreach($metals as $metal)
                    <option value="{{ $metal->id }}" {{ old('metal_id', $product->metal_id) == $metal->id ? 'selected' : '' }}>
                        {{ $metal->name }}
                    </option>
                @endforeach
            </select>
            @error('metal_id')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gemstone Field -->
        <div class="mb-4">
            <label for="gemstone_id" class="block text-sm font-medium text-gray-700">Gemstone</label>
            <select id="gemstone_id" name="gemstone_id" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
                <option value="">Select Gemstone</option>
                @foreach($gemstones as $gemstone)
                    <option value="{{ $gemstone->id }}" {{ old('gemstone_id', $product->gemstone_id) == $gemstone->id ? 'selected' : '' }}>
                        {{ $gemstone->name }}
                    </option>
                @endforeach
            </select>
            @error('gemstone_id')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Setting Field -->
        <div class="mb-4">
            <label for="setting" class="block text-sm font-medium text-gray-700">Setting</label>
            <input type="text" id="setting" name="setting" value="{{ old('setting', $product->setting) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('setting')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Stone Shape Field -->
        <div class="mb-4">
            <label for="stone_shape" class="block text-sm font-medium text-gray-700">Stone Shape</label>
            <input type="text" id="stone_shape" name="stone_shape" value="{{ old('stone_shape', $product->stone_shape) }}" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
            @error('stone_shape')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Stock Status Field -->
        <div class="mb-4">
            <label for="stock_status" class="block text-sm font-medium text-gray-700">Stock Status</label>
            <select id="stock_status" name="stock_status" class="mt-1 block w-full border-gray-300 bg-gray-100 rounded-md shadow-sm">
                <option value="1" {{ old('stock_status', $product->stock_status) == '1' ? 'selected' : '' }}>In Stock</option>
                <option value="0" {{ old('stock_status', $product->stock_status) == '0' ? 'selected' : '' }}>Out of Stock</option>
            </select>
            @error('stock_status')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Status Field -->
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" id="status" name="status" value="1" class="sr-only peer" {{ old('status', $product->status) ? 'checked' : '' }}>
                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600"></div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Active</span>
            </label>
            @error('status')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Product</button>
        </div>
    </form>
</div>
@endsection
