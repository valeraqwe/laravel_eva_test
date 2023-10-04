<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Salon and Service Selection Page
Route::get('/salons', [SalonController::class, 'index'])->name('salons.index');
Route::get('/salons/{salon}/services', [SalonController::class, 'showSalonServices'])->name('salons.services');

// Service Registration Page
Route::get('/services/{service}/booking', [BookingController::class, 'showBookingForm'])->name('services.bookingForm');
Route::post('/services/{service}/booking', [BookingController::class, 'makeBooking'])->name('services.makeBooking');
Route::get('/services/{service}/availability/{date}', [BookingController::class, 'checkAvailability'])->name('services.checkAvailability');

// Admin Panel
Route::prefix('admin')->middleware('auth')->group(function () {
    // Salons
    Route::get('/salons', [AdminController::class, 'showSalons'])->name('admin.salons');
    Route::get('/salons/create', [AdminController::class, 'createSalon'])->name('admin.salons.create');
    Route::post('/salons', [AdminController::class, 'storeSalon'])->name('admin.salons.store');
    Route::get('/salons/{salon}/edit', [AdminController::class, 'editSalon'])->name('admin.salons.edit');
    Route::put('/salons/{salon}', [AdminController::class, 'updateSalon'])->name('admin.salons.update');
    Route::delete('/salons/{salon}', [AdminController::class, 'deleteSalon'])->name('admin.salons.delete');

    // Services
    Route::get('/services', [AdminController::class, 'showServices'])->name('admin.services');
    Route::get('/services/create', [AdminController::class, 'createService'])->name('admin.services.create');
    Route::post('/services', [AdminController::class, 'storeService'])->name('admin.services.store');
    Route::get('/services/{service}/edit', [AdminController::class, 'editService'])->name('admin.services.edit');
    Route::put('/services/{service}', [AdminController::class, 'updateService'])->name('admin.services.update');
    Route::delete('/services/{service}', [AdminController::class, 'deleteService'])->name('admin.services.delete');

    // Appointments
    Route::get('/appointments', [AdminController::class, 'showAppointments'])->name('admin.appointments');
});
