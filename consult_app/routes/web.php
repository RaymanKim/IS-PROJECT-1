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

// Route::resource('/doc', DoctorController::class);

// routes/web.php

Route::get('doctors', 'DoctorController@index');
Route::get('doctors/create', 'DoctorController@create');
Route::post('doctors', 'DoctorController@store');
Route::get('doctors/{id}', 'DoctorController@show');
Route::get('doctors/{id}/edit', 'DoctorController@edit');
Route::patch('doctors/{id}', 'DoctorController@update');
Route::delete('doctors/{id}', 'DoctorController@destroy');
Route::get('doctors/{id}/consultations', 'DoctorController@consultations');
Route::post('doctors/consultations/{consultationId}/update-payment-status', 'DoctorController@updatePaymentStatus');

Route::get('/doctor/login', [DoctorLoginController::class, 'showLoginForm'])->name('doctor.login');
Route::post('/doctor/login', [DoctorLoginController::class, 'login'])->name('doctor.login');
Route::post('/doctor/logout', [DoctorLoginController::class, 'logout'])->name('doctor.logout');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    return view('dashboard');
});

Route::middleware(['auth:doctor'])->group(function () {
    Route::get('/doctor/doctorDashboard', [DoctorDashboardController::class, 'index'])->name('doctor.doctorDashboard');
});

// Route::group(['middleware' => 'auth:users'], function () {
//     Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
// });

Route::get('/db-test', [DatabaseController::class, 'testConnection']);

