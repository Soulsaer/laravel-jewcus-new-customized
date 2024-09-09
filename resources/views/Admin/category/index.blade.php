@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Categories</h1>
    <a href="{{ route('admin.category.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New Category</a>
    
    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="overflow-x-auto p-2">
        <table id="categoriesTable" class="min-w-full bg-white rounded-lg shadow-lg border border-gray-200">
            <thead>
                <tr>
                    <th class="border-b px-4 py-2">ID</th>
                    <th class="border-b px-4 py-2">Name</th>
                    <th class="border-b px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="border-b px-4 py-2 text-center align-middle">{{ $category->id }}</td>
                        <td class="border-b px-4 py-2 text-center align-middle">{{ $category->name }}</td>
                        <td class="border-b px-4 py-2 text-center align-middle">
                            <a href="{{ route('admin.category.show', $category->id) }}">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                                    View
                                </button>
                            </a>
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="ml-2">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                                    Edit
                                </button>
                            </a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" class="inline ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    
    
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dataTable = new simpleDatatables.DataTable("#categoriesTable", {
        searchable: true,
        perPageSelect: false,
        sortable: true,
        
    });
    });
</script>
@endsection
