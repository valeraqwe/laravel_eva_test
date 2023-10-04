@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Manage Services</h1>

        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Service Name</th>
                <th class="px-4 py-2">Salon</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <td class="px-4 py-2">{{ $service->id }}</td>
                    <td class="px-4 py-2">{{ $service->name }}</td>
                    <td class="px-4 py-2">{{ $service->salon->address }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-500">Edit</a>
                        <!-- Add delete functionality if needed -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('admin.services.create') }}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Service</a>
    </div>
@endsection
