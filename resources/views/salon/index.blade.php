@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Select Salon and Service</h1>

        <div class="mb-4">
            <label for="salon" class="block text-sm font-medium text-gray-700">Salon:</label>
            <select id="salon" class="mt-1 block w-full py-2 px-3 border rounded-md">
                @foreach($salons as $salon)
                    <option value="{{ $salon->id }}">{{ $salon->address }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="service" class="block text-sm font-medium text-gray-700">Service:</label>
            <select id="service" class="mt-1 block w-full py-2 px-3 border rounded-md">
                <!-- Services will be populated dynamically based on the selected salon using JavaScript -->
            </select>
        </div>

        <button id="next" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" disabled>Next</button>
    </div>
@endsection
