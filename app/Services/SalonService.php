<?php

namespace App\Services;

use App\Models\Salon;
use Illuminate\Support\Collection;

class SalonService
{
    /**
     * Get services for a specific salon.
     *
     * @param int $salonId
     * @return Collection
     */
    public function getServicesForSalon(int $salonId): Collection
    {
        $salon = Salon::find($salonId);

        if (!$salon) {
            return collect([]); // Return an empty collection if salon not found
        }

        return $salon->services;
    }
}
