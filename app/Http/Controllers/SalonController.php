<?php

namespace App\Http\Controllers;

use App\Services\SalonService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    protected SalonService $salonService;

    public function __construct(SalonService $salonService)
    {
        $this->salonService = $salonService;
    }

    public function showSalonServices($salonId): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $services = $this->salonService->getServicesForSalon($salonId);
        return view('salon.services', ['services' => $services]);
    }
}
