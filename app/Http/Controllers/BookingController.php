<?php

namespace App\Http\Controllers;

use App\Services\BookingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected BookingService $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function checkAvailability($serviceId, $date): JsonResponse
    {
        $isAvailable = $this->bookingService->checkAvailability($serviceId, $date);
        return response()->json(['available' => $isAvailable]);
    }

    public function makeBooking(Request $request): JsonResponse
    {
        $data = $request->all();
        $appointment = $this->bookingService->makeBooking($data);
        return response()->json(['appointment' => $appointment]);
    }
}
