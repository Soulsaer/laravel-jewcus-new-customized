@extends('Admin.layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-xl font-semibold text-gray-700">Welcome to Admin Dashboard</h2>
</div>
@endsection
@section('js')
<script>
    document.querySelector('button').addEventListener('click', function() {
        const dropdown = document.querySelector('div.absolute');
        dropdown.classList.toggle('hidden');
    });
</script>
@endsection