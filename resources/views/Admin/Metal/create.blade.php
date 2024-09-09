@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Create Metal</h1>
    
    <form action="{{ route('admin.metal.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm">
            @error('image')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="alt" class="block text-sm font-medium text-gray-700">Alt Text</label>
            <input type="text" id="alt" name="alt" value="{{ old('alt') }}" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm">
            @error('alt')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Metal</button>
        </div>
    </form>
</div>
@endsection
