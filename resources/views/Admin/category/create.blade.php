@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Create Category</h1>
    
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
            <input type="text" id="url" name="url" value="{{ old('url') }}" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>
            @error('url')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
            <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>
            @error('meta_title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
            <textarea id="meta_description" name="meta_description" rows="3" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>{{ old('meta_description') }}</textarea>
            @error('meta_description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="meta_keyword" class="block text-sm font-medium text-gray-700">Meta Keyword</label>
            <textarea id="meta_keyword" name="meta_keyword" rows="3" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>{{ old('meta_keyword') }}</textarea>
            @error('meta_keyword')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="3" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" required>{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" id="status" name="status" value="1" class="sr-only peer" {{ old('status') == 1 ? 'checked' : '' }}>
                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600"></div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Active</span>
            </label>
            @error('status')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        
    
        <div class="mb-4">
            <label for="parent_category" class="block text-sm font-medium text-gray-700">Parent Category</label>
            <input type="number" id="parent_category" name="parent_category" value="{{ old('parent_category') }}" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm">
            @error('parent_category')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Category</button>
        </div>
    </form>
    
</div>
@endsection
