@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Metal Details</h1>
    
    <div class="bg-white p-6 border border-gray-200 rounded-md shadow-md">
        <p><strong class="font-semibold">Name:</strong> {{ $metal->name }}</p>
        <p>
            <strong class="font-semibold">Image:</strong>
            @if ($metal->image)
                <img src="{{ asset($metal->image) }}" alt="{{ $metal->alt }}" class="mt-2 max-w-full h-auto rounded-md shadow-sm" width="200">
            @else
                No Image Available
            @endif
        </p>
        <p><strong class="font-semibold">Alt Text:</strong> {{ $metal->alt }}</p>
        <p><strong class="font-semibold">Created At :</strong> {{ $metal->created_at }}</p>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.metal.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded ml-2 hover:bg-blue-600">Back to Metals</a>
    </div>
</div>
@endsection
