@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Manage Salons</h1>

        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Address</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($salons as $salon)
                <tr>
                    <td class="px-4 py-2">{{ $salon->id }}</td>
                    <td class="px-4 py-2">{{ $salon->address }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('admin.salons.edit', $salon) }}" class="text-blue-500">Edit</a>
                        <!-- Add delete functionality if needed -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('admin.salons.create') }}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Salon</a>
    </div>
@endsection
