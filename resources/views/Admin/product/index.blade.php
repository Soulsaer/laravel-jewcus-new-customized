@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Products</h1>
    <a href="{{ route('admin.product.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New Product</a>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto p-2">
        <table id="productsTable" class="min-w-full bg-white rounded-lg shadow-lg border border-gray-200">
            <thead>
                <tr>
                    <th class="border-b px-4 py-2">ID</th>
                    <th class="border-b px-4 py-2">Name</th>
                    <th class="border-b px-4 py-2">Image</th>
                    <th class="border-b px-4 py-2">Price in India</th>
                    <th class="border-b px-4 py-2">Stock Status</th>
                    <th class="border-b px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="border-b px-4 py-2 text-center">{{ $product->id }}</td>
                        <td class="border-b px-4 py-2 text-center">{{ $product->name }}</td>
                        <td class="border-b px-4 py-2 text-center">
                            @if ($product->image)
                           
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="mx-auto" width="50" height="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="border-b px-4 py-2 text-center">{{ $product->price_in_india }}</td>
                        <td class="border-b px-4 py-2 text-center">{{ $product->stock_status ? 'In Stock' : 'Out of Stock' }}</td>
                        <td class="border-b px-4 py-2 text-center">
                            <a href="{{ route('admin.product.show', $product->id) }}" class="inline-block">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                                    View
                                </button>
                            </a>
                            <a href="{{ route('admin.product.edit', $product->id) }}" class="ml-2 inline-block">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                                    Edit
                                </button>
                            </a>
                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" class="inline ml-2">
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

    {{ $products->links() }}
</div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataTable = new simpleDatatables.DataTable("#productsTable", {
                searchable: true,
                perPageSelect: false,
                sortable: true
            });
        });
    </script>
@endsection
