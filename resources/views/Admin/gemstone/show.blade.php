@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Gemstone Details</h1>
    
    <div class="bg-white p-6 border border-gray-200 rounded-md shadow-md">
        <p><strong class="font-semibold">Name:</strong> {{ $gemstone->name }}</p>
        <p>
            <strong class="font-semibold">Image:</strong>
            @if ($gemstone->image)
                <img src="{{ asset($gemstone->image) }}" alt="{{ $gemstone->alt }}" class="mt-2 max-w-full h-auto rounded-md shadow-sm" width="200">
            @else
                No Image Available
            @endif
        </p>
        <p><strong class="font-semibold">Alt Text:</strong> {{ $gemstone->alt }}</p>
        <p><strong class="font-semibold">Created At :</strong> {{ $gemstone->created_at }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.gemstone.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded ml-2 hover:bg-blue-600">Back to Metals</a>
    </div>
</div>
@endsection
