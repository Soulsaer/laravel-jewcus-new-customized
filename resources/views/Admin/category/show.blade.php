@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Category Details</h1>
    
    <div class="bg-white p-6 border border-gray-200 rounded-md">
        <p><strong>Name:</strong> {{ isset($category) ? $category->name : 'N/A' }}</p>
        <p><strong>Title:</strong> {{ isset($category) ? $category->title : 'N/A' }}</p>
        <p><strong>URL:</strong> {{ isset($category) ? $category->url : 'N/A' }}</p>
        <p><strong>Meta Title:</strong> {{ isset($category) ? $category->meta_title : 'N/A' }}</p>
        <p><strong>Meta Description:</strong> {{ isset($category) ? $category->meta_description : 'N/A' }}</p>
        <p><strong>Meta Keyword:</strong> {{ isset($category) ? $category->meta_keyword : 'N/A' }}</p>
        <p><strong>Description:</strong> {{ isset($category) ? $category->description : 'N/A' }}</p>
        <p><strong>Status:</strong> {{ isset($category) ? $category->status : 'N/A' }}</p>
        <p><strong>Parent Category ID:</strong> {{ isset($category) ? $category->parent_category : 'N/A' }}</p>
    </div>    

    <a href="{{ route('admin.category.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Back to Categories</a>
</div>
@endsection
