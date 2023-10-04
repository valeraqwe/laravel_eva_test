<?php

namespace App\Services;

use App\Models\Service;
use App\Models\Appointment;

class BookingService
{
    /**
     * Check availability for a specific service on a specific date.
     *
     * @param int $serviceId
     * @param string $date (format: Y-m-d)
     * @return bool
     */
    public function checkAvailability(int $serviceId, string $date): bool
    {
        $service = Service::find($serviceId);

        if (!$service) {
            return false; // Service not found
        }

        // Logic to check availability based on the service's available days and existing appointments
        // For simplicity, let's assume a service can have only one appointment per day
        $existingAppointment = Appointment::where('service_id', $serviceId)
            ->where('date', $date)
            ->first();

        return !$existingAppointment; // Return true if no existing appointment, false otherwise
    }

    /**
     * Make a booking for a specific service.
     *
     * @param array $data
     * @return Appointment
     */
    public function makeBooking(array $data): Appointment
    {
        // Validate data, ensure service is available, etc.
        // For simplicity, let's directly create an appointment
        return Appointment::create($data);
    }
}
