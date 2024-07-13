<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Auth\DoctorLoginController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\UserDashboardController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/book-an-appointment', function () {
    return view('book-an-appointment');
})->name('book-an-appointment');

Route::get('/form-diagnosis', function () {
    return view('form-diagnosis');
})->name('form-diagnosis');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('services');
    })->name('services');

    Route::get('/service1', function () {
        return view('service1');
    })->name('service1');

    Route::get('/service2', function () {
        return view('service2');
    })->name('service2');

    Route::get('/service3', function () {
        return view('service3');
    })->name('service3');
});

// Doctor routes
Route::get('doctors', [DoctorController::class, 'index']);
Route::get('doctors/create', [DoctorController::class, 'create']);
Route::post('doctors', [DoctorController::class, 'store']);
Route::get('doctors/{id}', [DoctorController::class, 'show']);
Route::get('doctors/{id}/edit', [DoctorController::class, 'edit']);
Route::patch('doctors/{id}', [DoctorController::class, 'update']);
Route::delete('doctors/{id}', [DoctorController::class, 'destroy']);
Route::get('doctors/{id}/consultations', [DoctorController::class, 'consultations']);
Route::post('doctors/consultations/{consultationId}/update-payment-status', [DoctorController::class, 'updatePaymentStatus']);

Route::get('/doctor/login', [DoctorLoginController::class, 'showLoginForm'])->name('doctor.login');
Route::post('/doctor/login', [DoctorLoginController::class, 'login'])->name('doctor.login');
Route::post('/doctor/logout', [DoctorLoginController::class, 'logout'])->name('doctor.logout');

// User dashboard route with user authentication middleware


Route::middleware([
    'auth:sanctum', // Ensure the user is authenticated using Sanctum
    config('jetstream.auth_session'), // Jetstream authentication session middleware
    'verified', // Ensure the user's email is verified
])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
});

// Doctor dashboard route with doctor authentication middleware
Route::group(['middleware' => ['auth:doctor']], function () {
    Route::get('/doctors/doctorDashboard', [DoctorDashboardController::class, 'index'])->name('doctors.doctorDashboard');
});

Route::get('/db-test', [DatabaseController::class, 'testConnection']);


