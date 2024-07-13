<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DoctorLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.doctor.login'); // Update to login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'doctorEmail' => 'required|string',
            'doctorPassword' => 'required|string',
        ]);

        $credentials = [
            'doctorEmail' => $request->doctorEmail,
            'doctorPassword' => $request->doctorPassword,
        ];
        // dd($credentials, Auth::guard('doctor')->user());

        if (Auth::guard('doctor')->attempt($credentials, $request->remember)) {
            Log::info('Doctor logged in successfully');
            return redirect()->intended(route('doctors.doctorDashboard'));
        }

        Log::warning('Doctor login attempt failed');
        return back()->withInput($request->only('doctorEmail', 'remember'))
            ->withErrors(['doctorEmail' => 'These credentials do not match our records.']);
    }


    public function logout(Request $request)
    {
        Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
