@extends('Admin.layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Gemstones</h1>
        <a href="{{ route('admin.gemstone.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New
            Gemstone</a>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto p-2">
            <table id="gemstonesTable" class="min-w-full bg-white rounded-lg shadow-lg border border-gray-200">
                <thead>
                    <tr>
                        <th class="border-b px-4 py-2">ID</th>
                        <th class="border-b px-4 py-2">Name</th>
                        <th class="border-b px-4 py-2">Image</th>
                        <th class="border-b px-4 py-2">Alt Text</th>
                        <th class="border-b px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gemstones as $gemstone)
                        <tr>
                            <td class="border-b px-4 py-2 text-center align-middle">{{ $gemstone->id }}</td>
                            <td class="border-b px-4 py-2 text-center align-middle">{{ $gemstone->name }}</td>
                            <td class="border-b px-4 py-2 text-center align-middle">
                                @if ($gemstone->image)
                                    <img src="{{ asset($gemstone->image) }}" alt="{{ $gemstone->alt }}" class="mx-auto" width="50" height="50">
                                @else
                                    No Image
                                @endif
                            </td>                            
                            <td class="border-b px-4 py-2 text-center align-middle">{{ $gemstone->alt }}</td>
                            <td class="border-b px-4 py-2 text-center align-middle">
                                <a href="{{ route('admin.gemstone.show', $gemstone->id) }}" class="inline-block">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                                        View
                                    </button>
                                </a>
                                <a href="{{ route('admin.gemstone.edit', $gemstone->id) }}" class="ml-2 inline-block">
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{ route('admin.gemstone.destroy', $gemstone->id) }}" method="POST"
                                    class="inline ml-2">
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

        {{ $gemstones->links() }}
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataTable = new simpleDatatables.DataTable("#gemstonesTable", {
                searchable: true,
                perPageSelect: false,
                sortable: true
            });
        });
    </script>
@endsection
