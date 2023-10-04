@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">View Appointments</h1>

        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Client Name</th>
                <th class="px-4 py-2">Service</th>
                <th class="px-4 py-2">Date & Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td class="px-4 py-2">{{ $appointment->id }}</td>
                    <td class="px-4 py-2">{{ $appointment->client_name }}</td>
                    <td class="px-4 py-2">{{ $appointment->service->name }}</td>
                    <td class="px-4 py-2">{{ $appointment->appointment_date->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
