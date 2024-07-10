<?php
namespace App\Http\Controllers\Auth;

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// class PatientLoginController extends AuthenticatedSessionController
// {
//     public function login(Request $request)
//     {
//         $this->authenticate($request);

//         // If authentication is successful, redirect to the patient dashboard
//         return redirect()->intended(route('patient.dashboard'));
//     }

//     protected function authenticate(Request $request)
//     {
//         $patient = User::where('patientEmail', $request->input('email'))->first();

//         if (!$patient) {
//             return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
//         }

//         if (!Hash::check($request->input('password'), $patient->password)) {
//             return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
//         }

//         auth()->login($patient);

//         return redirect()->intended(route('patient.dashboard'));
//     }
// }
